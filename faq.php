<?php $pagetitle = "FAQ"; include "include/header.php"; ?>

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
				<h3>Frequently Asked Questions</h3>
				</br>
                <!--<p class="headline main-headline">
                   Frequently Asked Questions
                </p>-->
            </div>
        </div>
    </div>
</div>


<!-- <div class="container">
	<div class="row">
		<div class="phinfobox warning">
			<p class="first phinfobox-title"><i class="glyphicon glyphicon-info-sign"></i> Warning</p>
			<p class="last">Some warning test.</p>
		</div>
	</div>
	
	<div class="row">
		<div class="phinfobox tip">
			<p class="first phinfobox-title"><i class="glyphicon glyphicon-info-sign"></i> Tip</p>
			<p class="last">Some tip.</p>
		</div>
	</div>
	
	<div class="row">
		<div class="phinfobox note">
			<p class="first phinfobox-title"><i class="glyphicon glyphicon-info-sign"></i> Note</p>
			<p class="last">Some note.</p>
		</div>
	</div>
</div>	-->

<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
			<section id="GroupA">
				<h3>Is "Process Hacker" a dangerous "hacking" tool?</h3>
				 No. Please read about the <a href="http://catb.org/~esr/faqs/hacker-howto.html#what_is">correct definition of "hacker"</a>.
			</section>

			<section id="GroupB">
				<h3>Is Process Hacker a portable application?</h3>
                Yes. In the same directory as <code>ProcessHacker.exe</code>, create a file named <code>ProcessHacker.exe.settings.xml</code>, settings will then be automatically saved here.
			</section>

			<section id="GroupC">
				<h3>Process Hacker can kill my anti-virus software! Is this a bug in the anti-virus software?</h3>
                No. Anti-virus software does not protect you from yourself. Please do not report these incidents as bugs because you will be wasting their time.
			</section>
			
			<section id="GroupD">
                <h3>Why is Process Hacker able to kill processes that no other tools can kill?</h3>
                Process Hacker loads a driver that searches for an internal Microsoft kernel function and uses it for process termination. 
                This function is not known to be hooked by malware or security software.
			</section>
			
			<section id="GroupE">
				<h3>Why is there annoying bug X in Process Hacker? Why is Process Hacker missing feature Y?</h3>
                Please report any bugs or feature requests in the <a href="/forums">forums</a>.
			</section>
			
			<section id="GroupF">
                <h3>Why can't I build Process Hacker?</h3>
                The most likely problem is that you do not have the latest Windows SDK installed.<br>
                Windows 7, Windows 8 and 8.1 SDK: <a href="http://msdn.microsoft.com/en-US/windows/desktop/bg162891">Windows 8.1 SDK</a>
				<br>
				<br>
                You can also debug plugins by configured the plugin Solution properties > Debugger options.
                <br><br>
                For example:<br>
                Debugger Command: <code>$(SolutionDir)..\bin\$(Configuration)$(PlatformArchitecture)\ProcessHacker.exe</code><br>
                Working Directory: <code>$(SolutionDir)..\bin\$(Configuration)$(PlatformArchitecture)\</code>
				<br><br>Note: This is already configured for all of our plugins but you will need to configure your own plugins.
			</section>
			
			<section id="GroupG">
                <h3>Symbols don't work properly!</h3>
      			Firstly, you need the latest <code>dbghelp.dll</code> version:<br>
                <br>
                1) Install the latest Windows SDK (e.g. Windows 10 SDK).<br>
                2) Open Process Hacker options via the main menu: Hacker &gt; Options<br>
                3) Click Symbols, and locate <code>dbghelp.dll</code><br><br>
                <dl>
                    <dd>
                        Windows XP, Vista and Windows 7 SDK:<br>
                        <code>\Program Files\Debugging Tools for Windows (x86)\</code><br><br>
                        Windows 8 or 8.1 SDK:<br>
                        32bit Windows: <code>\Program Files (x86)\Windows Kits\8.x\Debuggers\x86\</code><br>
                        64bit Windows: <code>\Program Files (x86)\Windows Kits\8.x\Debuggers\x64\</code><br><br>
                        Windows 10 SDK:<br>
                        32bit Windows: <code>\Program Files (x86)\Windows Kits\10\Debuggers\x86\</code><br>
                        64bit Windows: <code>\Program Files (x86)\Windows Kits\10\Debuggers\x64\</code><br>
                    </dd>
                </dl>
                Secondly, you need to configure the search path. If you don't know what to do, enter:<br>
                <code>SRV*SOME_FOLDER*http://msdl.microsoft.com/download/symbols</code><br><br>
                Replace <code>SOME_FOLDER</code> with any folder you can write to, like <code>D:\Symbols</code>.
                Now you can restart Process Hacker and view full symbols.
			</section>

			<section id="GroupI">
				<h3>Anti-cheat software reports Process Hacker as a game cheating tool!</h3>
      		    Report issues with Anti-cheat software to <a href="about.php">dmex</a>.
			</section>
        </div>

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="page-padding">
			<nav class="col-xs-3 bs-docs-sidebar">
				<ul id="sidebar" class="nav nav-stacked fixed" style="background-color: #f8f8f8; border: 1px solid #eee;">
					<li><a href="#GroupA">Is "Process Hacker" a dangerous "hacking" tool?</a></li>
					<li><a href="#GroupB">Is Process Hacker a portable application?</a></li>
					<li><a href="#GroupC">Process Hacker can kill my anti-virus software!</a></li>
					<li><a href="#GroupD">Why is Process Hacker able to kill processes?</a></li>
					<li><a href="#GroupE">Why is there annoying bug X in Process Hacker?</a></li>
					<li><a href="#GroupF">Why can't I build Process Hacker?</a></li>
					<li><a href="#GroupG">Symbols don't work properly!</a></li>
					<li><a href="#GroupI">I got banned by Anticheat!</a></li>
					<li><a class="back-to-top" href="#top"> Back to top </a></li>
				</ul>
			</nav>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>

<script type="text/javascript">
$('body').scrollspy({
    target: '.bs-docs-sidebar',
    offset: 1
});
</script>