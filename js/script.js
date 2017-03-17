var app = {
  "init": function(){

    this.getData();
    this.resize();
    this.chart();

  },
  "resize": function(){
    // For responsive chart
    var that = this;

    /* Store the window width */
    that.windowWidth = $(window).width();

    /* Resize Event */
    $(window).resize(function () {
      // Check if the window width has actually changed
      if ($(window).width() != that.windowWidth) {
        // Update the window width for next time
        that.windowWidth = $(window).width();
        // Call chart function
        that.chart();
      }
    });
  },
  "getData": function(){

  },
  "chart": function(){

    var that = this;
    // Reset
    $("#viz").empty();

    // Basic setup
    var w = $("#viz").width();
    var h = w * 0.6;
    if (that.windowWidth < 500) {

        h = w * 1.2;
    }
    var margin = {
      top: 20,
      bottom: 20,
      left: 0,
      right: 0
    };
    var width = w - margin.left - margin.right;
    var height = h - margin.top - margin.bottom;

    var svg = d3.select("#viz")
                .append("svg")
                .attr("width", width)
                .attr("height", height);

    var g = svg.classed("canvas", true)
               .attr("transform", "translate(" + margin.left+ "," + margin.top + ")");

    // Scales

    // Draw
  }
};

app.init();
