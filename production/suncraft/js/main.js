//bar
var ctxB = document.getElementById("barChart").getContext('2d');
var myBarChart = new Chart(ctxB, {
type: 'bar',
data: {
labels: ["2008", "2009", "2010","2011", "2012", "2013","2014", "2015", "2016", "2017", "2018", "2019"],
datasets: [{
label: 'Consumption by year',
data: [100, 85, 74, 13, 15, 48, 76, 68, 95, 88, 50, 65],
borderColor: 'rgba(60, 252, 121, .8)',
backgroundColor: 'rgba(60, 252, 121, .6)',
borderWidth: 1
}]
},
options: {responsive: true,
scales: {
yAxes: [{
ticks: {
beginAtZero: true
},
scaleLabel: {
labelString: 'Consumption (kwh)',
display: true
}
}]
}
}
});