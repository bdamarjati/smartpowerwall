try {

    Apex.tooltip = {
        theme: 'dark'
    }

    // Capacity
    var capacity = [0, 0, 0, 0, 0, 0, 0];
    var load = [0, 0, 0, 0, 0, 0, 0];
    var charge = [0, 0, 0, 0, 0, 0, 0];

    //Updating Chart
    var Toggle = setInterval(UpdateChart, 3000);

    function UpdateChart() {
        var newcap = Math.floor(Math.random() * 361);
        var newload = Math.floor(Math.random() * 161);
        var newcharge = Math.floor(Math.random() * 161);

        var newv = Math.floor(Math.random() * (225 - 215) + 215);
        var newi = (newcap / newv).toFixed(3);

        capacity.shift();
        capacity.push(newcap);
        load.shift();
        load.push(newload);
        charge.shift();
        charge.push(newcharge);

        d_1C_7.updateSeries([{
            data: capacity
        }]);
        d_1C_6.updateSeries([{
            data: load
        }]);
        d_1C_5.updateSeries([{
            data: charge
        }]);
        document.getElementById("textcap").innerHTML = newcap + " Watt";
        document.getElementById("textload").innerHTML = newload + " Watt";
        document.getElementById("textcharge").innerHTML = newcharge + " Watt";

        document.getElementById("txtpwr").innerHTML = newcap + " Watt";
        document.getElementById("txtcrnt").innerHTML = newi + " A";
        document.getElementById("txtvlt").innerHTML = newv + " V";

        $(document).ready(function () {
            var pwrbr = document.getElementById("pwrbr");
            var crntbr = document.getElementById("crntbr");
            var vltbr = document.getElementById("vltbr");
            pwrbr.setAttribute("style", "width:" + (newcap * 100) / 360 + "%");
            crntbr.setAttribute("style", "width:" + (newi * 100) / 4 + "%");
            vltbr.setAttribute("style", "width:" + (newv * 100) / 440 + "%");
        });
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
            type: "gradient",
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
            type: "gradient",
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
            type: "gradient",
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



} catch (e) {
    // statements
    console.log(e);
}
