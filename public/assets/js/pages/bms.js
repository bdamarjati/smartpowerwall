try {
    function getBmsData() {
        $.ajax({
            url: 'api/BmsData',
            success: function (data) {
                var svc = data[0].svc;
                var amp = data[0].amps;
                var temp = data[0].temp;
                var soc = data[0].soc;
                var vc1 = data[0].vc1;
                var vc2 = data[0].vc2;
                var vc3 = data[0].vc3;
                var vc4 = data[0].vc4;
                var vc5 = data[0].vc5;
                var vc6 = data[0].vc6;
                var vc7 = data[0].vc7;
                var vc8 = data[0].vc8;
                var vc9 = data[0].vc9;
                var vc10 = data[0].vc10;
                var vc11 = data[0].vc11;
                var vc12 = data[0].vc12;
                var vc13 = data[0].vc13;
                var vc14 = data[0].vc14;
                var vc15 = data[0].vc15;
                var maxvc = Math.max(vc1, vc2, vc3, vc4, vc5, vc6, vc7, vc8, vc9, vc10, vc11, vc12, vc13, vc14, vc15);
                var minvc = Math.min(vc1, vc2, vc3, vc4, vc5, vc6, vc7, vc8, vc9, vc10, vc11, vc12, vc13, vc14, vc15);
                document.getElementById('bmsvolt').innerHTML = svc.toFixed(2) + " Volt";
                document.getElementById('bmscrnt').innerHTML = amp.toFixed(3) + " A";
                document.getElementById('bmstemp').innerHTML = temp.toFixed(2);
                document.getElementById('bmssoc').innerHTML = soc + " %";
                document.getElementById('tvc1').innerHTML = vc1.toFixed(4) + " V";
                document.getElementById('tvc2').innerHTML = vc2.toFixed(4) + " V";
                document.getElementById('tvc3').innerHTML = vc3.toFixed(4) + " V";
                document.getElementById('tvc4').innerHTML = vc4.toFixed(4) + " V";
                document.getElementById('tvc5').innerHTML = vc5.toFixed(4) + " V";
                document.getElementById('tvc6').innerHTML = vc6.toFixed(4) + " V";
                document.getElementById('tvc7').innerHTML = vc7.toFixed(4) + " V";
                document.getElementById('tvc8').innerHTML = vc8.toFixed(4) + " V";
                document.getElementById('tvc9').innerHTML = vc9.toFixed(4) + " V";
                document.getElementById('tvc10').innerHTML = vc10.toFixed(4) + " V";
                document.getElementById('tvc11').innerHTML = vc11.toFixed(4) + " V";
                document.getElementById('tvc12').innerHTML = vc12.toFixed(4) + " V";
                document.getElementById('tvc13').innerHTML = vc13.toFixed(4) + " V";
                document.getElementById('tvc14').innerHTML = vc14.toFixed(4) + " V";
                document.getElementById('tvc15').innerHTML = vc15.toFixed(4) + " V";
                document.getElementById('cellmax').innerHTML = maxvc.toFixed(2) + " V";
                document.getElementById('cellmin').innerHTML = minvc.toFixed(2) + " V";
            }
        });
    }

    getBmsData();
    setInterval(getBmsData, 3000);

} catch (e) {
    console.log(e);
}
