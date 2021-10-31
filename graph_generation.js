function plot(type) {
    var exp = document.getElementById("equation").value;
    var xValues = [];
    var yValues = [];
    
    // Generate values
    for (var x = 0; x <= 10; x += 1) {
      xValues.push(x);
      yValues.push(eval(exp));
    }
    
    // Display using Plotly
    var mode = "lines";
    if (type == "scatter") {mode = "markers"}
    var data = [{x:xValues, y:yValues, mode:mode, type:"scatter"}];
    var layout = {title: "y = " + exp};
    Plotly.newPlot("myPlot", data, layout);
    }
    

    