var ctx = document.getElementById("myChart-one").getContext('2d');
data = {
	    datasets: [{
	        data: [10, 20, 30]
	    }],

	    // These labels appear in the legend and in the tooltips when hovering different arcs
	    labels: [
	        'Red',
	        'Yellow',
	        'Blue'
	    ]
	};
new Chart(ctx, {
    data: data,
    type: 'polarArea',
//    options: options
});

var ctx = document.getElementById('myChart-two').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [0, 10, 5, 2, 20, 30, 45],
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx = document.getElementById('myChart-three').getContext('2d');
data = {
	    datasets: [{
	        data: [10, 20, 30]
	    }],

	    // These labels appear in the legend and in the tooltips when hovering different arcs
	    labels: [
	        'Red',
	        'Yellow',
	        'Blue'
	    ]
};
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
//    options: options
});


