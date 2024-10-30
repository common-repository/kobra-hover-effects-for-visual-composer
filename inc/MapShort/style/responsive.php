<?php
$output  = '<style type="text/css">
			
			@media screen and (max-width: 1600px) and (min-width: 960px) {
			/* CIRCLE EFFECTS CSS */
			.khe-items.khe-circle .info {
				  position: absolute;
				  top: 0px;
				  bottom: -1px!important;
				  left: -10px!important;
				  right: 8px!important;
				}
				.khe-items.khe-circle.effect1  {
							height: '.$main_height_width.'px;
							width: '.$main_height_width.'px;
						}
						.khe-items.khe-circle {
							height: '.$main_height_width.'px;
							width: '.$main_height_width.'px;
							left: 0;
						}
						.khe-items.khe-circle .img {
						  height: '.$main_height_width.'px;
						  width: '.$main_height_width.'px;
						  left: -10px;
						}
						.khe-items.khe-circle.effect1 .spinner {
						  height: '.$circle_spiner_height_width.'px;
						  width: '.$circle_spiner_height_width.'px;
						}
												
			}
			@media only screen and (min-width: 768px) {

				/* CIRCLE EFFECTS CSS */
						.khe-items.khe-circle {
							height: '.$img768_height_width.'px;
							width: '.$img768_height_width.'px;
							
							margin: 0 auto;
							margin-bottom: 10px;
						}
						.khe-items.khe-circle .img {
						  height: '.$img768_height_width.'px;
						  width: '.$img768_height_width.'px;
						}	
						.khe-items.khe-circle .info {
								position: absolute;
								top: 0;
								bottom: 0px;
								left: 0px;
								right: 0px;
							}
				}	
			@media only screen and (max-width: 760px) {
			/* CIRCLE EFFECTS CSS */
						.khe-items.khe-circle {
							height: 300px;
							width: 300px;
							margin: 0 auto;
							margin-bottom: 10px;
						}
						.khe-items.khe-circle .img {
						  height: 300px;
						  width: 300px;
						}
						.khe-items.khe-circle .info {
								position: absolute;
								top: 0;
								bottom: 0px;
								left: 0px;
								right: 0px;
							}
		
			} 
			</style>';