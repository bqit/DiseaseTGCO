<?php
    function theme_selector(){
        echo "<span id='container_theme' class='container_theme_hidden'>
		<div class='overlay-dark'></div> 
		<span class='themesWindow'>
			<p class='theme_title'>Seleziona un tema.</p>
			<span class='themeList'>
				<button class='button_style' id='default' onmouseover='preview('default')' onmouseout='resetTheme()' onclick='set_theme('default')'>
					<div class='button_content'><span>DTCGO Default</span><span class='row_default'><span class='circle' style='background-color: #2c2e31;'></span><span class='circle' style='background-color: #e2b714;'></span><span class='circle' style='background-color: #ffffff;'></span></span></div>
				</button>
				<button class='button_style' id='light' onmouseover='preview('light')' onclick='set_theme('light')'>
					<div class='button_content'><span>DTCGO Light</span><span class='row_light'><span class='circle' style='background-color: #d1d3d8;'></span><span class='circle' style='background-color: #e2b714;'></span><span class='circle' style='background-color: #343639;'></span></span></div>
				</button>
				<button class='button_style' id='retro' onmouseover='preview('retro')' onclick='set_theme('retro')'>
					<div class='button_content'><span>Retrò</span><span class='row_retro'><span class='circle' style='background-color: #26858b;'></span><span class='circle' style='background-color: #88dbdf;'></span><span class='circle' style='background-color: #f4f9f9;'></span></span></div>
				</button>
				<button class='button_style' id='hellokitty' onmouseover='preview('hellokitty')' onclick='set_theme('hellokitty')'>
				<div class='button_content'><span>Hello Kitty</span><span class='row_hellokitty'><span class='circle' style='background-color: #db4979;'></span><span class='circle' style='background-color: #661e36;'></span><span class='circle' style='background-color: #f0e9ec;'></span></span></div>
				</button>
				<button class='button_style' id='peach' onmouseover='preview('peach')' onclick='set_theme('peach')'>
				<div class='button_content'><span>Pesca</span><span class='row_peach'><span class='circle' style='background-color: #f6cc93;'></span><span class='circle' style='background-color: #df897a;'></span><span class='circle' style='background-color: #fcfcf8;'></span></span></div>
				</button>
				<button class='button_style' id='tiramisu' onmouseover='preview('tiramisu')' onclick='set_theme('tiramisu')'>
				<div class='button_content'><span>Tiramisù</span><span class='row_tiramisu'><span class='circle' style='background-color: #d0bca7;'></span><span class='circle' style='background-color: #7d5448;'></span><span class='circle' style='background-color: #c0976f;'></span></span></div>
				</button>
				<button class='button_style' id='cyberred' onmouseover='preview('cyberred')' onclick='set_theme('cyberred')'>
				<div class='button_content'><span>Cyber Red</span><span class='row_cyberred'><span class='circle' style='background-color: #3f1616;'></span><span class='circle' style='background-color: #ff6060;'></span><span class='circle' style='background-color: #bc4646;'></span></span></div>
				</button>
				<button class='button_style' id='lavender' onmouseover='preview('lavender')' onclick='set_theme('lavender')'>
				<div class='button_content'><span>Lavanda</span><span class='row_lavender'><span class='circle' style='background-color: #989bd9;'></span><span class='circle' style='background-color: #7c7faf;'></span><span class='circle' style='background-color: #f1ebf1;'></span></span></div>
				</button>
				<button class='button_style' id='matrix' onmouseover='preview('matrix')' onclick='set_theme('matrix')'>
				<div class='button_content'><span>Matrix</span><span class='row_matrix'><span class='circle' style='background-color: #032000;'></span><span class='circle' style='background-color: #15ff00;'></span><span class='circle' style='background-color: #006500;'></span></span></div>
				</button>
				<button class='button_style' id='stealth' onmouseover='preview('stealth')' onclick='set_theme('stealth')'>
				<div class='button_content'><span>Stealth</span><span class='row_stealth'><span class='circle' style='background-color: #121212;'></span><span class='circle' style='background-color: #5e676e;'></span><span class='circle' style='background-color: #383e42;'></span></span></div>
				</button>
				<button class='button_style' id='chiesenewyear' onmouseover='preview('chiesenewyear')' onclick='set_theme('chiesenewyear')'>
				<div class='button_content'><span>Capodanno Cinese</span><span class='row_chiesenewyear'><span class='circle' style='background-color: #0e0506;'></span><span class='circle' style='background-color: #e2a528;'></span><span class='circle' style='background-color: #ff3a32;'></span></span></div>
				</button>
				<button class='button_style' id='evangelion' onmouseover='preview('evangelion')' onclick='set_theme('evangelion')'>
				<div class='button_content'><span>Evangelion</span><span class='row_evangelion'><span class='circle' style='background-color: #14081f;'></span><span class='circle' style='background-color: #7554a3;'></span><span class='circle' style='background-color: #99de1e;'></span></span></div>
				</button>
			</span>
		</span>
	</span>";
    }