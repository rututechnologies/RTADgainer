<?php


    $format_array = " var format = new Array(
										  /[0-9]{11}/g,
										  /[0-9]{10}/g,				
										  /[1][(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g, 									
										  /[1][(][0-9]{3}[)][-\s\.][0-9]{3}[-\s\.][0-9]{4}/g, 								
										  /[1][-\s\.][(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g, 								
										  /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g,									
										  /[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}/g, 									
										  /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}/g, 									
										  /[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}/g,									
										  /[(]{0,1}[0-9]{2}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}/g,							
										  /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{2}[-\s\.]{0,1}[0-9]{4}/g,
										  /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{3}/g,								
										  /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{3}/g,								
										  /[(]{0,1}[0-9]{4}[)]{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{2}/g								
									 );";
									 
		
		echo "
						
						function replaceText(oldText, newText, node, element, allElements){ 
						  node = node || document.body; // base node 

						  var childs = node.childNodes, i = 0;					
						  
						  //oldText 8005551212
						  //newText 877.123.4567	  
						  //newText 1.877.123.4567	  
						  
						var textNewNum = newText.replace(/\D/g,''); 				// 8771234567		18771234567	 
						var textNewNoOne = newText.substring(1,newText.length); 			// 77.123.4567		877.123.4567	 
						 
						 $format_array
								 	
						 
						  while(node = childs[i]){ 
							 
							if (node.nodeType == 3){ // text node found, do the replacement
							  if (node.textContent && node.textContent.length > 5) {
								 
								 	
								 	var text = node.textContent;				// (800) 555-1212   1(800) 555-1212
									var text_ = text.replace(/\D/g,'');			// 8005551212   	18005551212
									var noOne = text.substring(1,text.length);  //  005551212   	8005551212
									
									var textOne = '1'+oldText;					//  18005551212  
								 						 	
									
								 
									if(text.search(newText) > 0 || text.search(textNewNoOne) > 0){										
										return false;
									}else{
										
										if(text_.match(oldText) && text_ != '' && text_.match(newText) === null){
											
											for(var y in format){
												var repl = text.match(format[y]);
												if(repl !== null){
													node.textContent = text.replace(repl, newText);	
													
													return true;
												}												
											
											}
											return false;
										} 										
										else if( text_.match(textOne) && text_ != ''){
											
											for(var y in format){
												var repl = text.match(format[y]);
												if(repl !== null){
													node.textContent = text.replace(repl, newText);	
													
													return true;
												}												
											
											}
											return false;
										}
										
									}
								
							  } else if(node.nodeValue && node.nodeValue.length > 5) { // support to IE
							  		
									var text = node.nodeValue;					// (800) 555-1212   1(800) 555-1212
									var text_ = text.replace(/\D/g,'');			// 8005551212   	18005551212
									var noOne = text.substring(1,text.length);  //  005551212   	8005551212
									
									var textOne = '1'+oldText;					//  18005551212  
									
									var oldTextNum = oldText.replace(/\D/g,'');
							  		
									if(text.search(newText) > 0 || text.search(textNewNoOne) > 0){										
										return false;
									}else{
										
										if(text_.match(oldText) && text_ != '' && ( text_.match(textOne) == null || text_.match(textOne) == '' )){
											
											for(var y in format){
												var repl = text.match(format[y]);
												if(repl !== null){
													node.nodeValue = text.replace(repl, newText);	
													
													return true;
												}												
											
											}
											return false;
										} 										
										else if( text_.match(textOne) && text != ''){
											
											for(var y in format){
												var repl = text.match(format[y]);
												if(repl !== null){
													node.nodeValue = text.replace(repl, newText);	
													
													return true;
												}												
											
											}
											return false;
										}
									}
								
								
							  }else{
								  return false;
							  }
							} else { // not a text mode, look forward
							  replaceText(oldText, newText, node); 
							} 
							i++; 
						  } 
						}
			
			
			function replaceAttributes(trackingNumber,content,findNum,log)
			{
				 
				$format_array
							
				
				for(var x in format){
				
					try{
				
				       var numToReplace = content.replace(/\D/g,''); // if(log == 1) { console.log('N '+numToReplace); }
				       var toFind = findNum.replace(/\D/g,''); // if(log == 1) { console.log('F '+toFind); }
					   
						//if(log == 1 && numToReplace == toFind){ console.log(toFind+' '+numToReplace); }
						
						var n=content.match(format[x]); 
						var y=toFind.match(format[x]); 
						 if(log == 1){ console.log(content+' ['+n+'] '+x+' ('+y+') '+toFind+' '+numToReplace); }
												
						
						
						if(n !== null && numToReplace == toFind){
						    if(log == 1){ console.log(numToReplace+' n '+trackingNumber);  }
							content = content.replace(n, trackingNumber);
							//console.log('inside '+content); 
							return content;
							break;
						}
						
				   } catch (e){
					//console.log(e.message );  
				   }
				
			    }
				return false;
				
			}	
				
			// TODO: updatetime				
//			 setInterval(function() {
//		
//					var ip = '".$visitor."';
//					var id = '".$row_id."';
//					var session_id = '".$session_id."';
//					var variable_defined = 1;						
//						jQuery.post('". site_url('incomingdata/updatetime') ."?variable='+variable_defined, {ip:ip,session_id:session_id,id:id}, function(data){
//																									
//										//console.log(data);
//												
//						}, 'jsonp');
//					
//				}, 30000); 
//				
//			";							 
                                     
?>