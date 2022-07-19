const sborPod_emnick = ()=>{
	amount = +document.getElementsByClassName('amount-collected')[0].innerText
	percent = amount/1400000*100
	function decimalAdjust(type, value, exp) {
		// Если степень не определена, либо равна нулю...
		if (typeof exp === 'undefined' || +exp === 0) {
		  return Math[type](value);
		}
		value = +value;
		exp = +exp;
		// Если значение не является числом, либо степень не является целым числом...
		if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
		  return NaN;
		}
		// Сдвиг разрядов
		value = value.toString().split('e');
		value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
		// Обратный сдвиг
		value = value.toString().split('e');
		return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
	  };
	Math.ceil10 = function(value, exp) {
		  return decimalAdjust('ceil', value, exp);
		};
	totalPercent = Math.ceil10(percent, -2)
	document.querySelector('.fundraising .chart .chart2').style = "background: conic-gradient(#CE9A98 "+totalPercent+"%, transparent 0)";
	document.querySelector('p.d-flex.justify-content-start.justify-content-lg-end.align-items-center').innerText=amount+" руб.("+totalPercent+"%)"
}
if(document.getElementsByClassName('amount-collected').length !=0) {
	console.log("document.getElementsByClassName('amount-collected').length")
	sborPod_emnick()
}