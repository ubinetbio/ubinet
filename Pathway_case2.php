<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/andreas01.css" media="screen" title="andreas01 (screen)" />
<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />

<title>RegUbi</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://cytoscape.github.io/cytoscape.js/api/cytoscape.js-latest/cytoscape.min.js"></script>
	<script src="cytoscape.js/cytoscape.min.js"></script>
	<script src="cytoscape.js/arbor.js"></script>
	<script src="cytoscape.js/cytoscape.js"></script>
	<script src="cytoscape.js/jquery.cxtmenu.js"></script>
	<script src="cytoscape.js/jquery.cxtmenu.min.js"></script>
	<script src="cytoscape.js/jquery.cytoscape-edgehandles.js"></script>
	<script src="cytoscape.js/jquery.cytoscape-edgehandles.js"></script>
	<script src="cytoscape.js/jquery.cytoscape-edgehandles.min.js"></script>
	<script src="cytoscape.js/jquery.cytoscape-panzoom.js"></script>
	<script src="cytoscape.js/jquery.cytoscape-panzoom.min.js"></script>
    <script src="code.js"></script>
    

</head>


<style type="text/css">
	body { 
	  font: 14px helvetica neue, helvetica, arial, sans-serif;
	}
	
	#cy {
	  height: 90%;
	  width: 90%;
	  position:absolute;

	  left: 200;
	  top: 200;
	}
	
	#info {
      
	  	color: #c88;
  		font-size: 1em;
		position: absolute;
		z-index: -1;
		left: 1em;
		top: 1em;
    
	 
	}
</style>


<body>
 <div id="cy">

 
<div id="note">
<p> Click on nodes or edges</p>
</div>
<script>
$(function(){ // on dom ready

$('#cy').cytoscape({
  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(name)',
        'text-valign': 'center',
        'color': 'white',
        'text-outline-width': 2,
        'text-outline-color': '#888'
      })
    .selector('edge')
      .css({
        'target-arrow-shape': 'triangle',
		'line-color':'red'
      })
    .selector(':selected')
      .css({
        'background-color': 'black',
        'line-color': 'black',
        'target-arrow-color': 'black',
        'source-arrow-color': 'black'
      })
    .selector('.faded')
      .css({
        'opacity': 0.25,
        'text-opacity': 0
      }),
  
  elements: {
    nodes: [
      { data: { id: 'j', name: 'Jerry' } },
      { data: { id: 'e', name: 'Elaine' } },
      { data: { id: 'k', name: 'Kramer' } },
      { data: { id: 'g', name: 'George' } }
    ],
    edges: [
      { data: { source: 'j', target: 'e' } },
      { data: { source: 'j', target: 'k' } },
      { data: { source: 'j', target: 'g' } },
      { data: { source: 'e', target: 'j' } },
      { data: { source: 'e', target: 'k' } },
      { data: { source: 'k', target: 'j' } },
      { data: { source: 'k', target: 'e' } },
      { data: { source: 'k', target: 'g' } },
      { data: { source: 'g', target: 'j' } }
    ]
  },
  
  layout: {
    name: 'grid',
    padding: 100
    
  },
  
  // on graph initial layout done (could be async depending on layout...)
  ready: function(){
    window.cy = this;
    
    // giddy up...
    
    cy.elements().unselectify();
    
    cy.on('tap', 'node', function(e){
      var node = e.cyTarget; 
      var neighborhood = node.neighborhood().add(node);
      
      cy.elements().addClass('faded');
      neighborhood.removeClass('faded');
    });
    
    cy.on('tap', function(e){
      if( e.cyTarget === cy ){
        cy.elements().removeClass('faded');
      }
    });
  }
});

}); // on dom ready
</script>
  
</body>
</html>