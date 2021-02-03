  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>cakephp-fusion-charts-plugin/Vendor/FusionCharts.php at master · lecterror/cakephp-fusion-charts-plugin · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144.png" />

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.png" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="i75M7VeUl3dRKEagqYTgz2FrpEncWbuNRljH2zBTNwo=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/assets/github-6e0ace83ec7ba0cd13ef51a09da281292a594fe3.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/assets/github2-ea00d7d6a15762c8a9e99b633aea7e8d3d80cce8.css" media="screen" rel="stylesheet" type="text/css" />
    


    <script src="https://a248.e.akamai.net/assets.github.com/assets/frameworks-cc8431500f70fcd18c6da029472b59d6c39d0d95.js" type="text/javascript"></script>
    
    <script defer="defer" src="https://a248.e.akamai.net/assets.github.com/assets/github-32bd6ab4526fe30abec6a3ff906ef07b420c84ad.js" type="text/javascript"></script>
    
    

      <link rel='permalink' href='/lecterror/cakephp-fusion-charts-plugin/blob/2664fc91c934f308dd9b39a7de96b37f50f291f1/Vendor/FusionCharts.php'>
    <meta property="og:title" content="cakephp-fusion-charts-plugin"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/lecterror/cakephp-fusion-charts-plugin"/>
    <meta property="og:image" content="https://a248.e.akamai.net/assets.github.com/images/gravatars/gravatar-user-420.png?1345673561"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="A FusionCharts plugin for CakePHP. Contribute to cakephp-fusion-charts-plugin development by creating an account on GitHub."/>

    <meta name="description" content="A FusionCharts plugin for CakePHP. Contribute to cakephp-fusion-charts-plugin development by creating an account on GitHub." />

  <link href="https://github.com/lecterror/cakephp-fusion-charts-plugin/commits/master.atom" rel="alternate" title="Recent Commits to cakephp-fusion-charts-plugin:master" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob windows vis-public env-production ">
    <div id="wrapper">

    
    

      <div id="header" class="true clearfix">
        <div class="container clearfix">
          <a class="site-logo" href="https://github.com/">
            <img alt="GitHub" class="github-logo-4x" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x.png?1337118065" />
            <img alt="GitHub" class="github-logo-4x-hover" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x-hover.png?1337118065" />
          </a>


                  <!--
      make sure to use fully qualified URLs here since this nav
      is used on error pages on other domains
    -->
    <ul class="top-nav logged_out">
        <li class="pricing"><a href="https://github.com/plans">Signup and Pricing</a></li>
        <li class="explore"><a href="https://github.com/explore">Explore GitHub</a></li>
      <li class="features"><a href="https://github.com/features">Features</a></li>
        <li class="blog"><a href="https://github.com/blog">Blog</a></li>
      <li class="login"><a href="https://github.com/login?return_to=%2Flecterror%2Fcakephp-fusion-charts-plugin%2Fblob%2Fmaster%2FVendor%2FFusionCharts.php">Sign in</a></li>
    </ul>



          
        </div>
      </div>

      

      

            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="container hentry">
        
        <div class="pagehead repohead instapaper_ignore readability-menu">
        <div class="title-actions-bar">
          



              <ul class="pagehead-actions">



          <li>
            <span class="star-button"><a href="/login?return_to=%2Flecterror%2Fcakephp-fusion-charts-plugin" class="minibutton btn-star js-toggler-target entice tooltipped leftwards" title="You must be signed in to use this feature" rel="nofollow">Star</a><a class="social-count js-social-count" href="/lecterror/cakephp-fusion-charts-plugin/stargazers">20</a></span>
          </li>
          <li>
            <a href="/login?return_to=%2Flecterror%2Fcakephp-fusion-charts-plugin" class="minibutton btn-fork js-toggler-target fork-button entice tooltipped leftwards"  title="You must be signed in to fork a repository" rel="nofollow">Fork</a><a href="/lecterror/cakephp-fusion-charts-plugin/network" class="social-count">5</a>
          </li>
    </ul>

          <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
            <span class="repo-label"><span>public</span></span>
            <span class="mega-icon mega-icon-public-repo"></span>
            <span class="author vcard">
<a href="/lecterror" class="url fn" itemprop="url" rel="author">              <span itemprop="title">lecterror</span>
              </a></span> /
            <strong><a href="/lecterror/cakephp-fusion-charts-plugin" class="js-current-repository">cakephp-fusion-charts-plugin</a></strong>
          </h1>
        </div>

          

  <ul class="tabs">
    <li><a href="/lecterror/cakephp-fusion-charts-plugin" class="selected" highlight="repo_sourcerepo_downloadsrepo_commitsrepo_tagsrepo_branches">Code</a></li>
    <li><a href="/lecterror/cakephp-fusion-charts-plugin/network" highlight="repo_network">Network</a>
    <li><a href="/lecterror/cakephp-fusion-charts-plugin/pulls" highlight="repo_pulls">Pull Requests <span class='counter'>0</span></a></li>

      <li><a href="/lecterror/cakephp-fusion-charts-plugin/issues" highlight="repo_issues">Issues <span class='counter'>0</span></a></li>


    <li><a href="/lecterror/cakephp-fusion-charts-plugin/graphs" highlight="repo_graphsrepo_contributors">Graphs</a></li>


  </ul>
  
<div class="frame frame-center tree-finder" style="display:none"
      data-tree-list-url="/lecterror/cakephp-fusion-charts-plugin/tree-list/2664fc91c934f308dd9b39a7de96b37f50f291f1"
      data-blob-url-prefix="/lecterror/cakephp-fusion-charts-plugin/blob/2664fc91c934f308dd9b39a7de96b37f50f291f1"
    >

  <div class="breadcrumb">
    <span class="bold"><a href="/lecterror/cakephp-fusion-charts-plugin">cakephp-fusion-charts-plugin</a></span> /
    <input class="tree-finder-input js-navigation-enable" type="text" name="query" autocomplete="off" spellcheck="false">
  </div>

    <div class="octotip">
      <p>
        <a href="/lecterror/cakephp-fusion-charts-plugin/dismiss-tree-finder-help" class="dismiss js-dismiss-tree-list-help" title="Hide this notice forever" rel="nofollow">Dismiss</a>
        <span class="bold">Octotip:</span> You've activated the <em>file finder</em>
        by pressing <span class="kbd">t</span> Start typing to filter the
        file list. Use <span class="kbd badmono">↑</span> and
        <span class="kbd badmono">↓</span> to navigate,
        <span class="kbd">enter</span> to view files.
      </p>
    </div>

  <table class="tree-browser" cellpadding="0" cellspacing="0">
    <tr class="js-header"><th>&nbsp;</th><th>name</th></tr>
    <tr class="js-no-results no-results" style="display: none">
      <th colspan="2">No matching files</th>
    </tr>
    <tbody class="js-results-list js-navigation-container">
    </tbody>
  </table>
</div>

<div id="jump-to-line" style="display:none">
  <h2>Jump to Line</h2>
  <form accept-charset="UTF-8">
    <input class="textfield" type="text">
    <div class="full-button">
      <button type="submit" class="classy">
        Go
      </button>
    </div>
  </form>
</div>


<div class="tabnav">

  <span class="tabnav-right">
    <ul class="tabnav-tabs">
      <li><a href="/lecterror/cakephp-fusion-charts-plugin/tags" class="tabnav-tab" highlight="repo_tags">Tags <span class="counter ">2</span></a></li>
      <li><a href="/lecterror/cakephp-fusion-charts-plugin/downloads" class="tabnav-tab" highlight="repo_downloads">Downloads <span class="counter blank">0</span></a></li>
    </ul>
    
  </span>

  <div class="tabnav-widget scope">

    <div class="context-menu-container js-menu-container js-context-menu">
      <a href="#"
         class="minibutton bigger switcher js-menu-target js-commitish-button btn-branch repo-tree"
         data-hotkey="w"
         data-master-branch="master"
         data-ref="master">
         <span><i>branch:</i> master</span>
      </a>

      <div class="context-pane commitish-context js-menu-content">
        <a href="javascript:;" class="close js-menu-close"><span class="mini-icon mini-icon-remove-close"></span></a>
        <div class="context-title">Switch branches/tags</div>
        <div class="context-body pane-selector commitish-selector js-navigation-container">
          <div class="filterbar">
            <input type="text" id="context-commitish-filter-field" class="js-navigation-enable" placeholder="Filter branches/tags" data-filterable />
            <ul class="tabs">
              <li><a href="#" data-filter="branches" class="selected">Branches</a></li>
              <li><a href="#" data-filter="tags">Tags</a></li>
            </ul>
          </div>

          <div class="js-filter-tab js-filter-branches" data-filterable-for="context-commitish-filter-field" data-filterable-type=substring>
            <div class="no-results js-not-filterable">Nothing to show</div>
              <div class="commitish-item branch-commitish selector-item js-navigation-item js-navigation-target selected">
                <span class="mini-icon mini-icon-confirm"></span>
                <h4>
                    <a href="/lecterror/cakephp-fusion-charts-plugin/blob/master/Vendor/FusionCharts.php" class="js-navigation-open" data-name="master" rel="nofollow">master</a>
                </h4>
              </div>
          </div>

          <div class="js-filter-tab js-filter-tags" style="display:none" data-filterable-for="context-commitish-filter-field" data-filterable-type=substring>
            <div class="no-results js-not-filterable">Nothing to show</div>
              <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                <span class="mini-icon mini-icon-confirm"></span>
                <h4>
                    <a href="/lecterror/cakephp-fusion-charts-plugin/blob/1.3/Vendor/FusionCharts.php" class="js-navigation-open" data-name="1.3" rel="nofollow">1.3</a>
                </h4>
              </div>
              <div class="commitish-item tag-commitish selector-item js-navigation-item js-navigation-target ">
                <span class="mini-icon mini-icon-confirm"></span>
                <h4>
                    <a href="/lecterror/cakephp-fusion-charts-plugin/blob/0.1/Vendor/FusionCharts.php" class="js-navigation-open" data-name="0.1" rel="nofollow">0.1</a>
                </h4>
              </div>
          </div>
        </div>
      </div><!-- /.commitish-context-context -->
    </div>
  </div> <!-- /.scope -->

  <ul class="tabnav-tabs">
    <li><a href="/lecterror/cakephp-fusion-charts-plugin" class="selected tabnav-tab" highlight="repo_source">Files</a></li>
    <li><a href="/lecterror/cakephp-fusion-charts-plugin/commits/master" class="tabnav-tab" highlight="repo_commits">Commits</a></li>
    <li><a href="/lecterror/cakephp-fusion-charts-plugin/branches" class="tabnav-tab" highlight="repo_branches" rel="nofollow">Branches <span class="counter ">1</span></a></li>
  </ul>

</div>

  
  
  


          

        </div><!-- /.repohead -->

        <div id="js-repo-pjax-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:e8c40f9e144f94d9a07598ad44cd3dad -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:e8c40f9e144f94d9a07598ad44cd3dad -->

<!-- block_view_fragment_key: views10/v8/blob:v21:9a9740a8f35f7e08a2b536509819c181 -->
  <div id="slider">

    <div class="breadcrumb" data-path="Vendor/FusionCharts.php/">
      <b itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/lecterror/cakephp-fusion-charts-plugin/tree/2664fc91c934f308dd9b39a7de96b37f50f291f1" class="js-rewrite-sha" itemprop="url"><span itemprop="title">cakephp-fusion-charts-plugin</span></a></b> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/lecterror/cakephp-fusion-charts-plugin/tree/2664fc91c934f308dd9b39a7de96b37f50f291f1/Vendor" class="js-rewrite-sha" itemscope="url"><span itemprop="title">Vendor</span></a></span> / <strong class="final-path">FusionCharts.php</strong> <span class="js-clippy mini-icon mini-icon-clippy " data-clipboard-text="Vendor/FusionCharts.php" data-copied-hint="copied!" data-copy-hint="copy to clipboard"></span>
    </div>

      <div class="commit file-history-tease js-blob-contributors-loader" data-request-url="/lecterror/cakephp-fusion-charts-plugin/contributors/master/Vendor/FusionCharts.php" data-path="Vendor/FusionCharts.php/">
        Fetching contributors…

        <div class="participation">
          <p class="quickstat js-loading-status-text"><img alt="Octocat-spinner-16px" height="16" src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-16px.gif?1329920549" width="16" /></p>
        </div>
      </div>

    <div class="frames">
      <div class="frame frame-center" data-path="Vendor/FusionCharts.php/" data-permalink-url="/lecterror/cakephp-fusion-charts-plugin/blob/2664fc91c934f308dd9b39a7de96b37f50f291f1/Vendor/FusionCharts.php" data-title="cakephp-fusion-charts-plugin/Vendor/FusionCharts.php at master · lecterror/cakephp-fusion-charts-plugin · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="mini-icon mini-icon-text-file"></b></span>
                <span class="mode" title="File Mode">executable file</span>
                  <span>143 lines (126 sloc)</span>
                <span>6.573 kb</span>
              </div>
              <ul class="button-group actions">
                  <li>
                    <a class="grouped-button file-edit-link minibutton bigger lighter js-rewrite-sha" href="/lecterror/cakephp-fusion-charts-plugin/edit/2664fc91c934f308dd9b39a7de96b37f50f291f1/Vendor/FusionCharts.php" data-method="post" rel="nofollow" data-hotkey="e">Edit</a>
                  </li>
                <li>
                  <a href="/lecterror/cakephp-fusion-charts-plugin/raw/master/Vendor/FusionCharts.php" class="minibutton btn-raw grouped-button bigger lighter" id="raw-url">Raw</a>
                </li>
                  <li>
                    <a href="/lecterror/cakephp-fusion-charts-plugin/blame/master/Vendor/FusionCharts.php" class="minibutton btn-blame grouped-button bigger lighter">Blame</a>
                  </li>
                <li>
                  <a href="/lecterror/cakephp-fusion-charts-plugin/commits/master/Vendor/FusionCharts.php" class="minibutton btn-history grouped-button bigger lighter" rel="nofollow">History</a>
                </li>
              </ul>
            </div>
              <div class="data type-php">
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
</pre>
          </td>
          <td width="100%">
                <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="c1">// Page: FusionCharts.php</span></div><div class='line' id='LC3'><span class="c1">// Author: InfoSoft Global (P) Ltd.</span></div><div class='line' id='LC4'><span class="c1">// This page contains functions that can be used to render FusionCharts.</span></div><div class='line' id='LC5'><br/></div><div class='line' id='LC6'><br/></div><div class='line' id='LC7'><span class="c1">// encodeDataURL function encodes the dataURL before it&#39;s served to FusionCharts.</span></div><div class='line' id='LC8'><span class="c1">// If you&#39;ve parameters in your dataURL, you necessarily need to encode it.</span></div><div class='line' id='LC9'><span class="c1">// Param: $strDataURL - dataURL to be fed to chart</span></div><div class='line' id='LC10'><span class="c1">// Param: $addNoCacheStr - Whether to add aditional string to URL to disable caching of data</span></div><div class='line' id='LC11'><span class="k">function</span> <span class="nf">encodeDataURL</span><span class="p">(</span><span class="nv">$strDataURL</span><span class="p">,</span> <span class="nv">$addNoCacheStr</span><span class="o">=</span><span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC12'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Add the no-cache string if required</span></div><div class='line' id='LC13'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$addNoCacheStr</span><span class="o">==</span><span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC14'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// We add ?FCCurrTime=xxyyzz</span></div><div class='line' id='LC15'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If the dataURL already contains a ?, we add &amp;FCCurrTime=xxyyzz</span></div><div class='line' id='LC16'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// We replace : with _, as FusionCharts cannot handle : in URLs</span></div><div class='line' id='LC17'>		<span class="k">if</span> <span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nx">strDataURL</span><span class="p">,</span><span class="s2">&quot;?&quot;</span><span class="p">)</span><span class="o">&lt;&gt;</span><span class="mi">0</span><span class="p">)</span></div><div class='line' id='LC18'>			<span class="nv">$strDataURL</span> <span class="o">.=</span> <span class="s2">&quot;&amp;FCCurrTime=&quot;</span> <span class="o">.</span> <span class="nx">Date</span><span class="p">(</span><span class="s2">&quot;H_i_s&quot;</span><span class="p">);</span></div><div class='line' id='LC19'>		<span class="k">else</span></div><div class='line' id='LC20'>			<span class="nv">$strDataURL</span> <span class="o">.=</span> <span class="s2">&quot;?FCCurrTime=&quot;</span> <span class="o">.</span> <span class="nx">Date</span><span class="p">(</span><span class="s2">&quot;H_i_s&quot;</span><span class="p">);</span></div><div class='line' id='LC21'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC22'>	<span class="c1">// URL Encode it</span></div><div class='line' id='LC23'>	<span class="k">return</span> <span class="nb">urlencode</span><span class="p">(</span><span class="nv">$strDataURL</span><span class="p">);</span></div><div class='line' id='LC24'><span class="p">}</span></div><div class='line' id='LC25'><br/></div><div class='line' id='LC26'><br/></div><div class='line' id='LC27'><span class="c1">// datePart function converts MySQL database based on requested mask</span></div><div class='line' id='LC28'><span class="c1">// Param: $mask - what part of the date to return &quot;m&#39; for month,&quot;d&quot; for day, and &quot;y&quot; for year</span></div><div class='line' id='LC29'><span class="c1">// Param: $dateTimeStr - MySQL date/time format (yyyy-mm-dd HH:ii:ss)</span></div><div class='line' id='LC30'><span class="k">function</span> <span class="nf">datePart</span><span class="p">(</span><span class="nv">$mask</span><span class="p">,</span> <span class="nv">$dateTimeStr</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC31'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="k">list</span><span class="p">(</span><span class="nv">$datePt</span><span class="p">,</span> <span class="nv">$timePt</span><span class="p">)</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s2">&quot; &quot;</span><span class="p">,</span> <span class="nv">$dateTimeStr</span><span class="p">);</span></div><div class='line' id='LC32'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$arDatePt</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s2">&quot;-&quot;</span><span class="p">,</span> <span class="nv">$datePt</span><span class="p">);</span></div><div class='line' id='LC33'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$dataStr</span> <span class="o">=</span> <span class="s2">&quot;&quot;</span><span class="p">;</span></div><div class='line' id='LC34'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Ensure we have 3 parameters for the date</span></div><div class='line' id='LC35'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">count</span><span class="p">(</span><span class="nv">$arDatePt</span><span class="p">)</span> <span class="o">==</span> <span class="mi">3</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC36'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">list</span><span class="p">(</span><span class="nv">$year</span><span class="p">,</span> <span class="nv">$month</span><span class="p">,</span> <span class="nv">$day</span><span class="p">)</span> <span class="o">=</span> <span class="nv">$arDatePt</span><span class="p">;</span></div><div class='line' id='LC37'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// determine the request</span></div><div class='line' id='LC38'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nv">$mask</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC39'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s2">&quot;m&quot;</span><span class="o">:</span> <span class="k">return</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span><span class="nv">$month</span><span class="p">;</span></div><div class='line' id='LC40'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s2">&quot;d&quot;</span><span class="o">:</span> <span class="k">return</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span><span class="nv">$day</span><span class="p">;</span></div><div class='line' id='LC41'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s2">&quot;y&quot;</span><span class="o">:</span> <span class="k">return</span> <span class="p">(</span><span class="nx">int</span><span class="p">)</span><span class="nv">$year</span><span class="p">;</span></div><div class='line' id='LC42'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC43'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// default to mm/dd/yyyy</span></div><div class='line' id='LC44'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$month</span> <span class="o">.</span> <span class="s2">&quot;/&quot;</span> <span class="o">.</span> <span class="nv">$day</span> <span class="o">.</span> <span class="s2">&quot;/&quot;</span> <span class="o">.</span> <span class="nv">$year</span><span class="p">));</span></div><div class='line' id='LC45'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC46'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$dataStr</span><span class="p">;</span></div><div class='line' id='LC47'><span class="p">}</span></div><div class='line' id='LC48'><br/></div><div class='line' id='LC49'><br/></div><div class='line' id='LC50'><span class="c1">// renderChart renders the JavaScript + HTML code required to embed a chart.</span></div><div class='line' id='LC51'><span class="c1">// This function assumes that you&#39;ve already included the FusionCharts JavaScript class</span></div><div class='line' id='LC52'><span class="c1">// in your page.</span></div><div class='line' id='LC53'><br/></div><div class='line' id='LC54'><span class="c1">// $chartSWF - SWF File Name (and Path) of the chart which you intend to plot</span></div><div class='line' id='LC55'><span class="c1">// $strURL - If you intend to use dataURL method for this chart, pass the URL as this parameter. Else, set it to &quot;&quot; (in case of dataXML method)</span></div><div class='line' id='LC56'><span class="c1">// $strXML - If you intend to use dataXML method for this chart, pass the XML data as this parameter. Else, set it to &quot;&quot; (in case of dataURL method)</span></div><div class='line' id='LC57'><span class="c1">// $chartId - Id for the chart, using which it will be recognized in the HTML page. Each chart on the page needs to have a unique Id.</span></div><div class='line' id='LC58'><span class="c1">// $chartWidth - Intended width for the chart (in pixels)</span></div><div class='line' id='LC59'><span class="c1">// $chartHeight - Intended height for the chart (in pixels)</span></div><div class='line' id='LC60'><span class="k">function</span> <span class="nf">renderChart</span><span class="p">(</span><span class="nv">$chartSWF</span><span class="p">,</span> <span class="nv">$strURL</span><span class="p">,</span> <span class="nv">$strXML</span><span class="p">,</span> <span class="nv">$chartId</span><span class="p">,</span> <span class="nv">$chartWidth</span><span class="p">,</span> <span class="nv">$chartHeight</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC61'>	<span class="c1">//First we create a new DIV for each chart. We specify the name of DIV as &quot;chartId&quot;Div.			</span></div><div class='line' id='LC62'>	<span class="c1">//DIV names are case-sensitive.</span></div><div class='line' id='LC63'><br/></div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// The Steps in the script block below are:</span></div><div class='line' id='LC65'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//</span></div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//  1)In the DIV the text &quot;Chart&quot; is shown to users before the chart has started loading</span></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//    (if there is a lag in relaying SWF from server). This text is also shown to users</span></div><div class='line' id='LC68'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//    who do not have Flash Player installed. You can configure it as per your needs.</span></div><div class='line' id='LC69'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//</span></div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//  2) The chart is rendered using FusionCharts Class. Each chart&#39;s instance (JavaScript) Id </span></div><div class='line' id='LC71'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//     is named as chart_&quot;chartId&quot;.		</span></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//</span></div><div class='line' id='LC73'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//  3) Check whether we&#39;ve to provide data using dataXML method or dataURL method</span></div><div class='line' id='LC74'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//     save the data for usage below </span></div><div class='line' id='LC75'>	<span class="k">if</span> <span class="p">(</span><span class="nv">$strXML</span><span class="o">==</span><span class="s2">&quot;&quot;</span><span class="p">)</span></div><div class='line' id='LC76'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$tempData</span> <span class="o">=</span> <span class="s2">&quot;//Set the dataURL of the chart</span><span class="se">\n\t\t</span><span class="s2">chart_</span><span class="si">$chartId</span><span class="s2">.setDataURL(</span><span class="se">\&quot;</span><span class="si">$strURL</span><span class="se">\&quot;</span><span class="s2">)&quot;</span><span class="p">;</span></div><div class='line' id='LC77'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">else</span></div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$tempData</span> <span class="o">=</span> <span class="s2">&quot;//Provide entire XML data using dataXML method</span><span class="se">\n\t\t</span><span class="s2">chart_</span><span class="si">$chartId</span><span class="s2">.setDataXML(</span><span class="se">\&quot;</span><span class="si">$strXML</span><span class="se">\&quot;</span><span class="s2">)&quot;</span><span class="p">;</span></div><div class='line' id='LC79'><br/></div><div class='line' id='LC80'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Set up necessary variables for the RENDERCAHRT</span></div><div class='line' id='LC81'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$chartIdDiv</span> <span class="o">=</span> <span class="nv">$chartId</span> <span class="o">.</span> <span class="s2">&quot;Div&quot;</span><span class="p">;</span></div><div class='line' id='LC82'><br/></div><div class='line' id='LC83'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// create a string for outputting by the caller</span></div><div class='line' id='LC84'>	<span class="nv">$render_chart</span> <span class="o">=</span> <span class="s">&lt;&lt;&lt;RENDERCHART</span></div><div class='line' id='LC85'><span class="s">	&lt;!-- START Script Block for Chart $chartId --&gt;</span></div><div class='line' id='LC86'><span class="s">	&lt;div id=&quot;$chartIdDiv&quot; align=&quot;center&quot;&gt;</span></div><div class='line' id='LC87'><span class="s">		Chart.</span></div><div class='line' id='LC88'><span class="s">	&lt;/div&gt;</span></div><div class='line' id='LC89'><span class="s">	&lt;script type=&quot;text/javascript&quot;&gt;	</span></div><div class='line' id='LC90'><span class="s">		//Instantiate the Chart	</span></div><div class='line' id='LC91'><span class="s">		var chart_$chartId = new FusionCharts(&quot;$chartSWF&quot;, &quot;$chartId&quot;, &quot;$chartWidth&quot;, &quot;$chartHeight&quot;);</span></div><div class='line' id='LC92'><span class="s">		$tempData</span></div><div class='line' id='LC93'><span class="s">		//Finally, render the chart.</span></div><div class='line' id='LC94'><span class="s">		chart_$chartId.render(&quot;$chartIdDiv&quot;);</span></div><div class='line' id='LC95'><span class="s">	&lt;/script&gt;	</span></div><div class='line' id='LC96'><span class="s">	&lt;!-- END Script Block for Chart $chartId --&gt;</span></div><div class='line' id='LC97'><span class="s">RENDERCHART;</span></div><div class='line' id='LC98'><br/></div><div class='line' id='LC99'>&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$render_chart</span><span class="p">;</span></div><div class='line' id='LC100'><span class="p">}</span></div><div class='line' id='LC101'><br/></div><div class='line' id='LC102'><br/></div><div class='line' id='LC103'><span class="c1">//renderChartHTML function renders the HTML code for the JavaScript. This</span></div><div class='line' id='LC104'><span class="c1">//method does NOT embed the chart using JavaScript class. Instead, it uses</span></div><div class='line' id='LC105'><span class="c1">//direct HTML embedding. So, if you see the charts on IE 6 (or above), you&#39;ll</span></div><div class='line' id='LC106'><span class="c1">//see the &quot;Click to activate...&quot; message on the chart.</span></div><div class='line' id='LC107'><span class="c1">// $chartSWF - SWF File Name (and Path) of the chart which you intend to plot</span></div><div class='line' id='LC108'><span class="c1">// $strURL - If you intend to use dataURL method for this chart, pass the URL as this parameter. Else, set it to &quot;&quot; (in case of dataXML method)</span></div><div class='line' id='LC109'><span class="c1">// $strXML - If you intend to use dataXML method for this chart, pass the XML data as this parameter. Else, set it to &quot;&quot; (in case of dataURL method)</span></div><div class='line' id='LC110'><span class="c1">// $chartId - Id for the chart, using which it will be recognized in the HTML page. Each chart on the page needs to have a unique Id.</span></div><div class='line' id='LC111'><span class="c1">// $chartWidth - Intended width for the chart (in pixels)</span></div><div class='line' id='LC112'><span class="c1">// $chartHeight - Intended height for the chart (in pixels)</span></div><div class='line' id='LC113'><span class="k">function</span> <span class="nf">renderChartHTML</span><span class="p">(</span><span class="nv">$chartSWF</span><span class="p">,</span> <span class="nv">$strURL</span><span class="p">,</span> <span class="nv">$strXML</span><span class="p">,</span> <span class="nv">$chartId</span><span class="p">,</span> <span class="nv">$chartWidth</span><span class="p">,</span> <span class="nv">$chartHeight</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC114'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Generate the FlashVars string based on whether dataURL has been provided</span></div><div class='line' id='LC115'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// or dataXML.</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$strFlashVars</span> <span class="o">=</span> <span class="s2">&quot;&amp;chartWidth=&quot;</span> <span class="o">.</span> <span class="nv">$chartWidth</span> <span class="o">.</span> <span class="s2">&quot;&amp;chartHeight=&quot;</span> <span class="o">.</span> <span class="nv">$chartHeight</span> <span class="p">;</span></div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$strXML</span><span class="o">==</span><span class="s2">&quot;&quot;</span><span class="p">)</span></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// DataURL Mode</span></div><div class='line' id='LC119'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$strFlashVars</span> <span class="o">.=</span> <span class="s2">&quot;&amp;dataURL=&quot;</span> <span class="o">.</span> <span class="nv">$strURL</span><span class="p">;</span></div><div class='line' id='LC120'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">else</span></div><div class='line' id='LC121'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//DataXML Mode</span></div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$strFlashVars</span> <span class="o">.=</span> <span class="s2">&quot;&amp;dataXML=&quot;</span> <span class="o">.</span> <span class="nv">$strXML</span><span class="p">;</span></div><div class='line' id='LC123'><br/></div><div class='line' id='LC124'><span class="nv">$HTML_chart</span> <span class="o">=</span> <span class="s">&lt;&lt;&lt;HTMLCHART</span></div><div class='line' id='LC125'><span class="s">	&lt;!-- START Code Block for Chart $chartId --&gt;</span></div><div class='line' id='LC126'><span class="s">	&lt;OBJECT classid=&quot;clsid:D27CDB6E-AE6D-11cf-96B8-444553540000&quot; codebase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0&quot;  width=&quot;$chartWidth&quot; height=&quot;$chartHeight&quot; id=&quot;$chartId&quot;&gt;</span></div><div class='line' id='LC127'><span class="s">		&lt;param name=&quot;allowScriptAccess&quot; value=&quot;always&quot; /&gt;</span></div><div class='line' id='LC128'><span class="s">		&lt;param name=&quot;movie&quot; value=&quot;$chartSWF&quot;/&gt;		</span></div><div class='line' id='LC129'><span class="s">		&lt;param name=&quot;FlashVars&quot; value=&quot;$strFlashVars&quot; /&gt;</span></div><div class='line' id='LC130'><span class="s">		&lt;param name=&quot;quality&quot; value=&quot;high&quot; /&gt;</span></div><div class='line' id='LC131'><span class="s">		&lt;embed src=&quot;$chartSWF&quot; FlashVars=&quot;$strFlashVars&quot; quality=&quot;high&quot; width=&quot;$chartWidth&quot; height=&quot;$chartHeight&quot; name=&quot;$chartId&quot; allowScriptAccess=&quot;always&quot; type=&quot;application/x-shockwave-flash&quot; pluginspage=&quot;http://www.macromedia.com/go/getflashplayer&quot; /&gt;</span></div><div class='line' id='LC132'><span class="s">	&lt;/object&gt;</span></div><div class='line' id='LC133'><span class="s">	&lt;!-- END Code Block for Chart $chartId --&gt;</span></div><div class='line' id='LC134'><span class="s">HTMLCHART;</span></div><div class='line' id='LC135'><br/></div><div class='line' id='LC136'>&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$HTML_chart</span><span class="p">;</span></div><div class='line' id='LC137'><span class="p">}</span></div><div class='line' id='LC138'><br/></div><div class='line' id='LC139'><span class="c1">// boolToNum function converts boolean values to numeric (1/0)</span></div><div class='line' id='LC140'><span class="k">function</span> <span class="nf">boolToNum</span><span class="p">(</span><span class="nv">$bVal</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC141'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">((</span><span class="nv">$bVal</span><span class="o">==</span><span class="k">true</span><span class="p">)</span> <span class="o">?</span> <span class="mi">1</span> <span class="o">:</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC142'><span class="p">}</span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>
      </div>
    </div>

  </div>

<div class="frame frame-loading large-loading-area" style="display:none;" data-tree-list-url="/lecterror/cakephp-fusion-charts-plugin/tree-list/2664fc91c934f308dd9b39a7de96b37f50f291f1" data-blob-url-prefix="/lecterror/cakephp-fusion-charts-plugin/blob/2664fc91c934f308dd9b39a7de96b37f50f291f1">
  <img src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-64.gif?1329920549" height="64" width="64">
</div>

        </div>
      </div>
      <div class="context-overlay"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer" >
        
  <div class="upper_footer">
     <div class="container clearfix">

       <!--[if IE]><h4 id="blacktocat_ie">GitHub Links</h4><![endif]-->
       <![if !IE]><h4 id="blacktocat">GitHub Links</h4><![endif]>

       <ul class="footer_nav">
         <h4>GitHub</h4>
         <li><a href="https://github.com/about">About</a></li>
         <li><a href="https://github.com/blog">Blog</a></li>
         <li><a href="https://github.com/features">Features</a></li>
         <li><a href="https://github.com/contact">Contact &amp; Support</a></li>
         <li><a href="https://github.com/training">Training</a></li>
         <li><a href="http://enterprise.github.com/">GitHub Enterprise</a></li>
         <li><a href="http://status.github.com/">Site Status</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Clients</h4>
         <li><a href="http://mac.github.com/">GitHub for Mac</a></li>
         <li><a href="http://windows.github.com/">GitHub for Windows</a></li>
         <li><a href="http://eclipse.github.com/">GitHub for Eclipse</a></li>
         <li><a href="http://mobile.github.com/">GitHub Mobile Apps</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Tools</h4>
         <li><a href="http://get.gaug.es/">Gauges: Web analytics</a></li>
         <li><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></li>
         <li><a href="https://gist.github.com">Gist: Code snippets</a></li>

         <h4 class="second">Extras</h4>
         <li><a href="http://jobs.github.com/">Job Board</a></li>
         <li><a href="http://shop.github.com/">GitHub Shop</a></li>
         <li><a href="http://octodex.github.com/">The Octodex</a></li>
       </ul>

       <ul class="footer_nav">
         <h4>Documentation</h4>
         <li><a href="http://help.github.com/">GitHub Help</a></li>
         <li><a href="http://developer.github.com/">Developer API</a></li>
         <li><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></li>
         <li><a href="http://pages.github.com/">GitHub Pages</a></li>
       </ul>

     </div><!-- /.site -->
  </div><!-- /.upper_footer -->

<div class="lower_footer">
  <div class="container clearfix">
    <!--[if IE]><div id="legal_ie"><![endif]-->
    <![if !IE]><div id="legal"><![endif]>
      <ul>
          <li><a href="https://github.com/site/terms">Terms of Service</a></li>
          <li><a href="https://github.com/site/privacy">Privacy</a></li>
          <li><a href="https://github.com/security">Security</a></li>
      </ul>

      <p>&copy; 2012 <span title="0.09479s from fe15.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
    </div><!-- /#legal or /#legal_ie-->

  </div><!-- /.site -->
</div><!-- /.lower_footer -->

      </div><!-- /#footer -->

    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus site search</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last js-hidden-pane" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
        <dd>Submit comment</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> shift p</dt>
        <dd>Preview comment</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> shift p</dt>
          <dd>Preview comment</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Issues Dashboard</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div class="js-hidden-pane" >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first js-hidden-pane" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>w</dt>
          <dd>Switch branch/tag</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first">
        <h3>Browsing Commits</h3>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>escape</dt>
          <dd>Close form</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>p</dt>
          <dd>Parent commit</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o</dt>
          <dd>Other parent commit</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>
    <h3>Notifications</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open notification</dd>
        </dl>
      </div><!-- /.column.first -->

      <div class="column second">
        <dl class="keyboard-mappings">
          <dt>e <em>or</em> shift i <em>or</em> y</dt>
          <dd>Mark as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift m</dt>
          <dd>Mute thread</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:

> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown" target="_blank">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>


    <div id="ajax-error-message" class="flash flash-error">
      <span class="mini-icon mini-icon-exclamation"></span>
      Something went wrong with that request. Please try again.
      <a href="#" class="mini-icon mini-icon-remove-close ajax-error-dismiss"></a>
    </div>

    <div id="logo-popup">
      <h2>Looking for the GitHub logo?</h2>
      <ul>
        <li>
          <h4>GitHub Logo</h4>
          <a href="http://github-media-downloads.s3.amazonaws.com/GitHub_Logos.zip"><img alt="Github_logo" src="https://a248.e.akamai.net/assets.github.com/images/modules/about_page/github_logo.png?1329920549" /></a>
          <a href="http://github-media-downloads.s3.amazonaws.com/GitHub_Logos.zip" class="minibutton btn-download download">Download</a>
        </li>
        <li>
          <h4>The Octocat</h4>
          <a href="http://github-media-downloads.s3.amazonaws.com/Octocats.zip"><img alt="Octocat" src="https://a248.e.akamai.net/assets.github.com/images/modules/about_page/octocat.png?1329920549" /></a>
          <a href="http://github-media-downloads.s3.amazonaws.com/Octocats.zip" class="minibutton btn-download download">Download</a>
        </li>
      </ul>
    </div>

    
    
    <span id='server_response_time' data-time='0.09701' data-host='fe15'></span>
  </body>
</html>

