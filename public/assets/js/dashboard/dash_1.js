try {

  Apex.tooltip = {
    theme: 'dark'
  }

  // Capacity
  var capacity = [8, 5, 6, 6, 8, 2, 3 ];
  var load = [ 60, 28, 52, 38, 40, 36, 38];
  var charge = [38, 60, 38, 52, 36, 40, 28 ];

  //Updating Chart
  var Toggle = setInterval(UpdateChart, 3000);

  function UpdateChart() {
    var newcap = Math.floor(Math.random() * 11);
    var newload = Math.floor(Math.random() * 161);
    var newcharge = Math.floor(Math.random() * 161);

    capacity.shift();
    capacity.push(newcap);
    load.shift();
    load.push(newload);
    charge.shift();
    charge.push(newcharge);

    d_1C_7.updateSeries([
      {
        data: capacity
      }
    ]);
    d_1C_6.updateSeries([
      {
        data: load
      }
    ]);
    d_1C_5.updateSeries([
      {
        data: charge
      }
    ]);
    document.getElementById("textcap").innerHTML = newcap + " kWh";
    document.getElementById("textload").innerHTML = newload + " Watt";
    document.getElementById("textcharge").innerHTML = newcharge + " Watt";
  }

  // Charge
  var d_1options3 = {
    chart: {
      id: 'sparkline1',
      type: 'area',
      height: 160,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    series: [{
      name: 'Charge',
      data: charge
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
      min: 0
    },
    colors: ['#1b55e2'],
    tooltip: {
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
            opacityFrom: .40,
            opacityTo: .05,
            stops: [45, 100]
        }
    },
  }

  // Load
  var d_1options4 = {
    chart: {
      id: 'sparkline1',
      type: 'area',
      height: 160,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    series: [{
      name: 'Load',
      data: load
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
      min: 0
    },
    colors: ['#e7515a'],
    tooltip: {
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
            opacityFrom: .40,
            opacityTo: .05,
            stops: [45, 100]
        }
    },
  }

  var d_1options5 = {
    chart: {
      id: 'sparkline1',
      type: 'area',
      height: 160,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    fill: {
      opacity: 1,
    },
    series: [{
      name: 'Capacity',
      data: capacity
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7'],
    yaxis: {
      min: 0
    },
    colors: ['#009688'],
    tooltip: {
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
            opacityFrom: .40,
            opacityTo: .05,
            stops: [45, 100]
        }
    },
  }

  // Load
  var d_1C_5 = new ApexCharts(document.querySelector("#graphcharge"), d_1options3);
  d_1C_5.render()

  // Power In
  var d_1C_6 = new ApexCharts(document.querySelector("#graphload"), d_1options4);
  d_1C_6.render()

  // Capacity
  var d_1C_7 = new ApexCharts(document.querySelector("#graphcap"), d_1options5);
  d_1C_7.render()

  const ps = new PerfectScrollbar(document.querySelector('.mt-container'));

  

}
catch(e) {
  // statements
  console.log(e);
}
