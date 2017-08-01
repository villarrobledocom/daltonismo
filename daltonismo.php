<div style="text-align: center; margin: 20px;">
  <button type="button" onclick="filtro_dalton('protanopia');" style="width: 100px; height: 25px; font-size: 12.5px;">Protanopia</button>
  <button type="button" onclick="filtro_dalton('deuteranopia');" style="width: 100px; height: 25px; font-size: 12.5px;">Deuteranopia</button>
  <button type="button" onclick="filtro_dalton('tritanopia');" style="width: 100px; height: 25px; font-size: 12.5px;">Tritanopia</button>
  <button type="button" onclick="filtro_dalton('acromatopsia');" style="width: 100px; height: 25px; font-size: 12.5px;">Acromatopsia</button>
  <button type="button" onclick="filtro_dalton('normal');" style="width: 100px; height: 25px; font-size: 12.5px;">Normal</button>
</div>
<svg>
  <defs>
    <filter id="protanopia">
      <feColorMatrix
      type="matrix"
      values="1.3  0    0  0  0
              0    0.9  0  0  0
              0    0    0  0  0
              0    0    0  1  0"
      />
      <feColorMatrix
      type="saturate"
      values="2"
      />
    </filter>
    <filter id="deuteranopia">
      <feColorMatrix
      type="matrix"
      values="0.9  0    0    0  0
              0    0.9  0    0  0
              0    0    1.3  0  0
              0    0    0    1  0"
      />
      <feColorMatrix
      type="saturate"
      values="2"
      />
    </filter>
    <filter id="tritanopia">
      <feColorMatrix
      type="matrix"
      values="1.3  0    0    0  0
              0    0.9  0    0  0
              0    0    1.3  0  0
              0    0    0    1  0"
      />
      <feColorMatrix
      type="saturate"
      values="2"
      />
    </filter>
    <feColorMatrix
    type="saturate"
    values="2"
    />
    <filter id="acromatopsia">
      <feColorMatrix
      type="matrix"
      values="0.3  0.3  0.3  0 0
		          0.3  0.3  0.3  0 0
		          0.3  0.3  0.3  0 0
		          0    0    0    1 0"
      />
      <feColorMatrix
      type="saturate"
      values="2"
      />
    </filter>
    <filter id="normal">
      <feColorMatrix
      type="matrix"
      values="1  0  0  0  0
              0  1  0  0  0
              0  0  1  0  0
              0  0  0  1  0"
      />
    </filter>
  </defs>
</svg>
<script>
function filtro_dalton(disfuncion) {
  switch(disfuncion) {
    case 'protanopia':
      var filtro = '-webkit-filter: url(#protanopia); filter: url(#protanopia);';
      break;
    case 'deuteranopia':
      var filtro = '-webkit-filter: url(#deuteranopia); filter: url(#deuteranopia);';
      break;
    case 'tritanopia':
      var filtro = '-webkit-filter: url(#tritanopia); filter: url(#tritanopia);';
      break;
    case 'acromatopsia':
      var filtro = '-webkit-filter: url(#acromatopsia); filter: url(#acromatopsia);';
      break;
    case 'default':
      var filtro = '-webkit-filter: url(#normal); filter: url(#normal);';
      break;
  }
  for(var i = 0; i < imagenes.length; i += 1) {
    imagenes[i].style.cssText = filtro;
  }
}
var imagenes = document.getElementsByTagName('img');
</script>
