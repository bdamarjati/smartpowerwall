try {

    Apex.tooltip = {
        theme: 'dark'
    }

    // Capacity
    var capacity = [0, 0, 0, 0, 0, 0, 0];
    var load = [0, 0, 0, 0, 0, 0, 0];
    var charge = [0, 0, 0, 0, 0, 0, 0];

    var vlt1 = 0;
    var crnt1 = 0;
    var vlt2 = 0;
    var crnt2 = 0;
    var vlt3 = 0;
    var crnt3 = 0;

    var pwrbr = document.getElementById("pwrbr");
    var crntbr = document.getElementById("crntbr");
    var vltbr = document.getElementById("vltbr");

    //Updating Chart
    //var Toggle = setInterval(UpdateChart, 3000);

    function getData() {
        $.ajax({
            url: 'api/ChunkData/1',
            success: function (data) {
                //document.getElementById("debug").innerHTML = "P : " + data.power + "</br>I : " + data.current + "</br>V : " + data.voltage;
                capacity[0] = data.power[6];
                capacity[1] = data.power[5];
                capacity[2] = data.power[4];
                capacity[3] = data.power[3];
                capacity[4] = data.power[2];
                capacity[5] = data.power[1];
                capacity[6] = data.power[0];

                vlt1 = data.voltage[0];
                crnt1 = data.current[0];
                document.getElementById("textcap").innerHTML = capacity[6] + " Watt";
                document.getElementById("txtpwr").innerHTML = capacity[6] + " Watt";
                document.getElementById("txtcrnt").innerHTML = crnt1 + " A";
                document.getElementById("txtvlt").innerHTML = vlt1 + " V";

                pwrbr.setAttribute("style", "width:" + (capacity[6] * 100) / 1000 + "%");
                crntbr.setAttribute("style", "width:" + (crnt1 * 100) / 10 + "%");
                vltbr.setAttribute("style", "width:" + (vlt1 * 100) / 440 + "%");
            }
        });

        $.ajax({
            url: 'api/ChunkData/2',
            success: function (data) {
                //document.getElementById("debug").innerHTML = "P : " + data.power + "</br>I : " + data.current + "</br>V : " + data.voltage;
                load[0] = data.power[6];
                load[1] = data.power[5];
                load[2] = data.power[4];
                load[3] = data.power[3];
                load[4] = data.power[2];
                load[5] = data.power[1];
                load[6] = data.power[0];

                vlt2 = data.voltage[0];
                crnt2 = data.current[0];
                document.getElementById("textload").innerHTML = load[6] + " Watt";
            }
        });

        $.ajax({
            url: 'api/ChunkData/3',
            success: function (data) {
                document.getElementById("debug").innerHTML = "P : " + data.power + "</br>I : " + data.current + "</br>V : " + data.voltage;
                charge[0] = data.power[6];
                charge[1] = data.power[5];
                charge[2] = data.power[4];
                charge[3] = data.power[3];
                charge[4] = data.power[2];
                charge[5] = data.power[1];
                charge[6] = data.power[0];

                vlt3 = data.voltage[0];
                crnt3 = data.current[0];
                document.getElementById("textcharge").innerHTML = charge[6] + " Watt";
            }
        });
    }

    function UpdateChart() {
        getData();
        d_1C_7.updateSeries([{
            data: capacity
        }]);
        d_1C_6.updateSeries([{
            data: load
        }]);
        d_1C_5.updateSeries([{
            data: charge
        }]);
    };

    getData();

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

    setInterval(UpdateChart, 8000);

    //const ps = new PerfectScrollbar(document.querySelector('.mt-container'));

} catch (e) {
    // statements
    console.log(e);
}
