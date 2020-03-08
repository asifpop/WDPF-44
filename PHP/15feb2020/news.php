<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 
		$news=array(
			'news title 1' =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere possimus, inventore ipsam at autem! Necessitatibus aliquam qui itaque quasi, laborum fugit? Eos minima quasi aperiam, incidunt dolores aliquid nihil!" , 

			'news title 2' =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere possimus, inventore ipsam at autem! Necessitatibus aliquam qui itaque quasi, laborum fugit? Eos minima quasi aperiam, incidunt dolores aliquid nihil!" ,

			'news title 3' =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere possimus, inventore ipsam at autem! Necessitatibus aliquam qui itaque quasi, laborum fugit? Eos minima quasi aperiam, incidunt dolores aliquid nihil!" ,

			'news title 4' =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere possimus, inventore ipsam at autem! Necessitatibus aliquam qui itaque quasi, laborum fugit? Eos minima quasi aperiam, incidunt dolores aliquid nihil!" ,

			'news title 5' =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa facere possimus, inventore ipsam at autem! Necessitatibus aliquam qui itaque quasi, laborum fugit? Eos minima quasi aperiam, incidunt dolores aliquid nihil!" ,
		);


	?>
	<?php

	foreach($news as $title=>$body){
		echo"<h3>$title</h3>"."<p>$body</p>";
	}


	?>
	
</body>
</html>