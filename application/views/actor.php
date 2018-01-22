<head>
	<style>
		.span4 {
			border: 5px solid #88F; /* Dark blue stroke */
			background-color:#CCF; /* Box colour */
			text-align: center; /* Center the text */
			font-weight: 700; /* Dark blue stroke */
			width: 250px; /* Set width to make things easier. Open to change. */
			padding: 2%; /* Adds more colour */
			margin: 0 37%; /* Centers the image. Could be done better but was unable to find a simple way. */
		}
		#what {
			font-weight: 400;
		}
	</style>
</head>
<div class="row">
    <div class="span4" align="center">
        <a href="{key}">
        
        	<!-- Image size is set in order to make things easier to adjust. Open to change. -->
            <img src="/pix/{who}.jpg" title="{who} plays {role}" width="250px" height="250px"/>
        </a>
        <p>{who} ~ {role}</p>
        <p id="what">"{what}"</p>
        
        <!-- If I don't do this (../../../), the link will append, which will open the page but the compiler won't understand what it's looking at -->
        <a href="../../../" class="bottom">Back</a>
    </div>
</div> 