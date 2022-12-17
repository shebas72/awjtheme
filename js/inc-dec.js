let initialZoom = 1;
									let currentZoom = initialZoom;
									let maxZoom = 1.7;
									function inc_font(){
										currentZoom = currentZoom + .01
										if(currentZoom>=maxZoom) currentZoom = maxZoom;
										document.body.style.zoom = currentZoom
										document.body.style.transform = "scale("+currentZoom+")"
									}
									function dec_font(){
										currentZoom = currentZoom - .01
										if(currentZoom<=initialZoom) currentZoom = initialZoom;
										document.body.style.zoom = currentZoom
										document.body.style.transform = "scale("+currentZoom+")"
									}

                                