try {

  Apex.tooltip = {
    theme: 'dark'
  }

  // Usage
  var usage = [16600, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000];
  var charge = [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000, 16000, 19000, 18000, 19000];
  var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

  //Updating Chart
  var Toggle = setInterval(UpdateChart, 6000);

  function UpdateChart() {
    var newusage = Math.floor(Math.random() * 20000) + 10000;
	var newcharge = Math.floor(Math.random() * 20000) + 10000;
	var newload = Math.floor(Math.random() * 20000) + 10000;

    usage.shift();
    usage.push(newusage);
    charge.shift();
	charge.push(newcharge);
	
	var thismonth = month[0];
	month.shift();
	month.push(thismonth);

    chart1.updateOptions({
		series: [{
			name: 'Usages',
			data: usage
		}, {
			name: 'Charge',
			data: charge
		}],
	});
	
	chart.updateOptions({
		series : [newusage, newcharge, newload]
	});
  }

	var options1 = {
	  chart: {
		fontFamily: 'Nunito, sans-serif',
		height: 365,
		type: 'area',
		zoom: {
			enabled: false
		},
		dropShadow: {
		  enabled: true,
		  opacity: 0.3,
		  blur: 5,
		  left: -7,
		  top: 22
		},
		toolbar: {
		  show: false
		},
		events: {
		  mounted: function(ctx, config) {
			const highest1 = ctx.getHighestValueInSeries(0);
			const highest2 = ctx.getHighestValueInSeries(1);
		  },
		}
	  },
	  colors: ['#e7515a', '#e2a03f'],
	  dataLabels: {
		  enabled: false
	  },
	  markers: {
		discrete: [{
		seriesIndex: 0,
		dataPointIndex: 7,
		fillColor: '#000',
		strokeColor: '#000',
		size: 5
	  }, {
		seriesIndex: 2,
		dataPointIndex: 11,
		fillColor: '#000',
		strokeColor: '#000',
		size: 4
	  }]
	  },
	  stroke: {
		  show: true,
		  curve: 'smooth',
		  width: 2,
		  lineCap: 'square'
	  },
	  series: [{
		  name: 'Usages',
		  data: usage
	  }, {
		  name: 'Charge',
		  data: charge
	  }],
	  labels: month,
	  xaxis: {
		axisBorder: {
		  show: false
		},
		axisTicks: {
		  show: false
		},
		crosshairs: {
		  show: true
		},
		labels: {
		  offsetX: 0,
		  offsetY: 5,
		  style: {
			  fontSize: '12px',
			  fontFamily: 'Nunito, sans-serif',
			  cssClass: 'apexcharts-xaxis-title',
		  },
		}
	  },
	  yaxis: {
		labels: {
		  formatter: function(value, index) {
			return (value / 1000) + 'K'
		  },
		  offsetX: -22,
		  offsetY: 0,
		  style: {
			  fontSize: '12px',
			  fontFamily: 'Nunito, sans-serif',
			  cssClass: 'apexcharts-yaxis-title',
		  },
		}
	  },
	  grid: {
		borderColor: '#191e3a',
		strokeDashArray: 5,
		xaxis: {
			lines: {
				show: true
			}
		},   
		yaxis: {
			lines: {
				show: false,
			}
		},
		padding: {
		  top: 0,
		  right: 0,
		  bottom: 0,
		  left: -10
		}, 
	  }, 
	  legend: {
		position: 'top',
		horizontalAlign: 'right',
		offsetY: -50,
		fontSize: '16px',
		fontFamily: 'Nunito, sans-serif',
		markers: {
		  width: 10,
		  height: 10,
		  strokeWidth: 0,
		  strokeColor: '#fff',
		  fillColors: undefined,
		  radius: 12,
		  onClick: undefined,
		  offsetX: 0,
		  offsetY: 0
		},    
		itemMargin: {
		  horizontal: 0,
		  vertical: 20
		}
	  },
	  tooltip: {
		theme: 'dark',
		marker: {
		  show: true,
		},
		x: {
		  show: false,
		}
	  },
	  fill: {
		  type:"gradient",
		  gradient: {
			  type: "vertical",
			  shadeIntensity: 1,
			  inverseColors: !1,
			  opacityFrom: .28,
			  opacityTo: .05,
			  stops: [45, 100]
		  }
	  },
	  responsive: [{
		breakpoint: 575,
		options: {
		  legend: {
			  offsetY: -30,
		  },
		},
	  }]
	}

	var options = {
		chart: {
			type: 'donut',
			width: 380
		},
		colors: ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'],
		dataLabels: {
		  enabled: false
		},
		legend: {
			position: 'bottom',
			horizontalAlign: 'center',
			fontSize: '14px',
			markers: {
			  width: 10,
			  height: 10,
			},
			itemMargin: {
			  horizontal: 0,
			  vertical: 8
			}
		},
		plotOptions: {
		  pie: {
			donut: {
			  size: '65%',
			  background: 'transparent',
			  labels: {
				show: true,
				name: {
				  show: true,
				  fontSize: '29px',
				  fontFamily: 'Nunito, sans-serif',
				  color: undefined,
				  offsetY: -10
				},
				value: {
				  show: true,
				  fontSize: '26px',
				  fontFamily: 'Nunito, sans-serif',
				  color: '#bfc9d4',
				  offsetY: 16,
				  formatter: function (val) {
					return val
				  }
				},
				total: {
				  show: true,
				  showAlways: true,
				  label: 'Total',
				  color: '#888ea8',
				  formatter: function (w) {
					return w.globals.seriesTotals.reduce( function(a, b) {
					  return a + b
					}, 0)
				  }
				}
			  }
			}
		  }
		},
		stroke: {
		  show: true,
		  width: 25,
		  colors: '#0e1726'
		},
		series: [985, 737, 270],
		labels: ['Capacity', 'Charge', 'Used'],
		responsive: [{
			breakpoint: 1599,
			options: {
				chart: {
					width: '350px',
					height: '400px'
				},
				legend: {
					position: 'bottom'
				}
			},

			breakpoint: 1439,
			options: {
				chart: {
					width: '250px',
					height: '390px'
				},
				legend: {
					position: 'bottom'
				},
				plotOptions: {
				  pie: {
					donut: {
					  size: '65%',
					}
				  }
				}
			},
		}]
	}

	var chart1 = new ApexCharts(
		document.querySelector("#usageMonthly"),
		options1
	);

	chart1.render();

	var chart = new ApexCharts(
		document.querySelector("#chart-2"),
		options
	);

	chart.render();

	const ps = new PerfectScrollbar(document.querySelector('.mt-container'));
}
catch(e) {
    console.log(e);
}