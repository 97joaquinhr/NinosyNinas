// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// -- Area Chart Example


$.ajax({
    url: "graph_donadores.php",
    dataType: "JSON",
    success: function(json){
        //here inside json variable you've the json returned by your PHP
        
        var aux = new Array(json.data.length); 
        var i;
        
        aux[0] = parseInt(json.data[0]);
        
        for (i=1; i<json.data.length; i++) {
          aux[i] = aux[i-1] + parseInt(json.data[i]);
        }
        
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: json.labels,
            datasets: [{
              label: "Donadores",
              lineTension: 0.3,
              backgroundColor: "rgba(2,117,216,0.2)",
              borderColor: "rgba(2,117,216,1)",
              pointRadius: 5,
              pointBackgroundColor: "rgba(2,117,216,1)",
              pointBorderColor: "rgba(255,255,255,0.8)",
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(2,117,216,1)",
              pointHitRadius: 20,
              pointBorderWidth: 2,
              data: aux,
            }],
          },
          options: {
            scales: {
              xAxes: [{
                time: {
                  unit: 'date'
                },
                gridLines: {
                  display: false
                },
                ticks: {
                  maxTicksLimit: 7
                }
              }],
              yAxes: [{
                ticks: {
                  min: 0,
                  max: Math.max(...aux) + 5,
                  maxTicksLimit: 5
                },
                gridLines: {
                  color: "rgba(0, 0, 0, .125)",
                }
              }],
            },
            legend: {
              display: false
            }
          }
        });
    }
});




var data2 = {
  "labels" : ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"],
  "data" : [4215, 5312, 6251, 7841, 9821, 14984]
}

// -- Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: data2.labels,
    datasets: [{
      label: "Visitas",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: data2.data,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});


$.ajax({
    url: "graph_metodos.php",
    dataType: "JSON",
    success: function(json){
        //here inside json variable you've the json returned by your PHP
        // -- Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
          type: 'pie',
          data: {
            labels: json.labels,
            datasets: [{
              data: json.data,
              backgroundColor: json.colors,
            }],
          },
        });
    }
});

var date = new Date();
var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);

$.ajax({
    url: "https://www.googleapis.com/calendar/v3/calendars/o3keu4lhr6sc5hbqinip2k9arg@group.calendar.google.com/events?key=AIzaSyBfK9TC6BZsEbxOPaxoy5hnfQTbg8THejM&timeMax=" + lastDay.toISOString() + "&timeMin=" + firstDay.toISOString(),
    dataType: "JSON",
    success: function(json){
      // console.log(json);
      // Get events this month
      $("#google-events").html(json.items.length);
    }
});