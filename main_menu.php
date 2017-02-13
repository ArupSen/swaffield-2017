<?php 
/*
-- The tab headings should only be headings and they should not be clickable
-- there are six columns and each one is 820 / 6 which is 136 px including 1px border



*/
?>
<ul id="main_menu">
<!-- the home button / tab -->
  <li><a href="<?php bloginfo('url'); ?>">home</a></li>
<!-- our school drop-down start -->
  <li onmouseover=""><a>our school</a>
    <ul>
	<?php wp_list_bookmarks('title_li=&category=21&categorize=0'); ?>
<!--
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=2">history</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=9">staff</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=10">governors</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=42">aims &amp; values</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=97">policies</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4266">community projects</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=20">admissions</a></li>
	<li><a>prospectus</a></li>
	<li><a href="http://schoolsfinder.direct.gov.uk/2122584/overview/" target="_blank" >ofsted report</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=3060">job vacancies</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?cat=15">Celebrations</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page=175">School Council</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page=173">Freedom of Information</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page=1302">Fair Processing Notice</a></li>
-->
    </ul>
  </li>
  <li onmouseover=""><a>parents</a>
	<!-- parents drop-down start -->
    <ul>
	<?php wp_list_bookmarks('title_li=&category=18&categorize=0'); ?>
  <!--<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=7">parent pages</a></li>
    <li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=124">pta</a></li>
    <li><a>term dates</a></li>
    <li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=23">lunch</a></li>
    <li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=25">uniform</a></li>
    <li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=2018">attendance &amp; punctuality</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=17">homework</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=126">parents seeing teachers</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=96">play activities at lunchtime</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=14">clubs &amp; activities</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=24">breakfast club &amp; after school care</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=1782">moving on to secondary school</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=256">internet safety</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=481">travel plan</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=217">celebrating birthdays</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=97">policies</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=2476">collective worship</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=19">behaviour</a></li>
	-->
    </ul>
  </li>
  <li onmouseover=""><a>learning</a>
	<!-- learning drop-down starts -->
    <ul>
	<?php wp_list_bookmarks('title_li=&category=19&categorize=0'); ?>
<!--    <li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=26">general information</a></li>
    <li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4854">nursery</a></li>
    <li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4942">reception</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4903">year 1</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4932">year 2</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4839">Year 3</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4939">Year 4</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4890">Year 5</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4818">Year 6</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=171">Reading and Books</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=130">English</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=131">Maths</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=132">Science</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=133">ICT</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=134">The Arts</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=821">PE</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=243">Fun &amp; Educational websites</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=115">Special Educational Needs</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=116">Assesment and Monitoring</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=111">Foundation Stage</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=112">Key Stage 1</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=113">Key Stage 2</a></li>
	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=2476">Collective Worship</a></li>
    	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=121">Curriculum</a></li>
    	<li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=5043">Links and Resources</a></li>
    -->
    </ul>
  </li>
<!-- the curriculum  button / tab -->
  <li onmouseover=""><a>curriculum</a>
    <ul>
	<?php wp_list_bookmarks('title_li=&category=22&categorize=0'); ?>
    </ul>
  </li>
  <li onmouseover=""><a>News</a>
    <ul>
	<?php wp_list_bookmarks('title_li=&category=23&categorize=0'); ?>
<!--    <li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=4199">Latest News</a></li>
    <li><a >News Archive</a></li>
    <li><a href="http://www.swaffield.wandsworth.sch.uk/beta-site/?page_id=21">Gallery</a></li>
  -->
    </ul>
  </li>
</ul>
