(function(d,s,j,u,c,v,r,a,m){
	a=d.createElement(s),
	m=d.getElementsByTagName(s)[0];
	a.src=u + j;
	a.onload = function(){cb(u,c,v,r)};
	m.parentNode.insertBefore(a,m)
})(document,'script', 'tracking/fp.js?v=201708290', '<?php echo url('/') . '/adgainer/'; ?>', '<?php echo $campaign_id; ?>', '<?php echo $vars; ?>', '<?php echo $referrer; ?>');
