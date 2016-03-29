<?php $pagetitle = "Downloads"; include "include/header.php"; ?>

<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1 style="color: #fff;">Process Hacker <?php echo $LATEST_PH_VERSION ?> <small class="footer">r<?php echo $LATEST_PH_BUILD ?></small></h1>
                <p class="headline main-headline">
                   Released <?php echo $LATEST_PH_RELEASE_DATE ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-top: 35px;padding-bottom: 35px;">
	<div class="row">
		<div class="col-sm-12">
			<div class="alert alert-info" role="alert">
				<h4>Supported Operating Systems:</h4>
				<p>
					<ul>
						<li>Windows XP, Vista, 7, 8, 10, 32-bit or 64-bit.</li>
						<li>ARM and Itanium platforms are not supported.</li>
					</ul>
				</p>
			</div>
			</br>
		</div>
		
		<div class="row download-rowborder">
			<div class="col-sm-6">
				<h4 class="media-heading">Installer (recommended)</h3>
				<p>Prebuilt installer for easy and simple installation and deployment.</p>
				<p><div class="label label-default text-uppercase">SHA1: <?php echo $LATEST_PH_SETUP_SHA1 ?></div></p>
				<p><div class="label label-default text-uppercase">SHA2: <?php echo $LATEST_PH_SETUP_SHA2 ?></div></p>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-primary" style="width:225px" href="https://github.com/processhacker2/processhacker2/releases/download/v<?php echo $LATEST_PH_VERSION ?>/processhacker-<?php echo $LATEST_PH_VERSION ?>-setup.exe" role="button" onclick="ga('send', 'event', 'DownloadPage', 'click', 'Download_EXE');">
					<i class="glyphicon glyphicon-download-alt"></i> processhacker-<?php echo $LATEST_PH_VERSION ?>-setup.exe
				</a>
			</div>
		</div>
		
		<div class="row download-rowborder">
			<div class="col-sm-6">
				<h4 class="media-heading">Binaries (portable)</h3>
				<p>Compiled and zipped executable (includes plugins) without installer for advanced portable software deployment.</p>
				<p><div class="label label-default text-uppercase">SHA1: <?php echo $LATEST_PH_BIN_SHA1 ?></div></p>
				<p><div class="label label-default text-uppercase">SHA2: <?php echo $LATEST_PH_BIN_SHA2 ?></div></p>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-primary" style="width:225px" href="https://github.com/processhacker2/processhacker2/releases/download/v<?php echo $LATEST_PH_VERSION ?>/processhacker-<?php echo $LATEST_PH_VERSION ?>-bin.zip" role="button" onclick="ga('send', 'event', 'DownloadPage', 'click', 'Download_BIN');">
					<i class="glyphicon glyphicon-download-alt"></i> processhacker-<?php echo $LATEST_PH_VERSION ?>-bin.zip
				</a>
			</div>
		</div>
		
		<div class="row download-rowborder">
			<div class="col-sm-6">
				<h4 class="media-heading">Source code</h3>
				<p>Raw source code; Requires a compiler such as Visual Studio and some configuration.</p>
				<p><div class="label label-default text-uppercase">SHA1: <?php echo $LATEST_PH_SOURCE_SHA1 ?></div></p>
				<p><div class="label label-default text-uppercase">SHA2: <?php echo $LATEST_PH_SOURCE_SHA2 ?></div></p>
			</div>
			<div class="col-sm-6">
				<a class="btn btn-primary" style="width:225px" href="https://github.com/processhacker2/processhacker2/archive/v<?php echo $LATEST_PH_VERSION ?>.zip" role="button" onclick="ga('send', 'event', 'DownloadPage', 'click', 'Download_SRC');">
					<i class="glyphicon glyphicon-download-alt"></i> processhacker-<?php echo $LATEST_PH_VERSION ?>-src.zip
				</a>
			</div>
		</div>
		
		
			<!--<div class="col-xs-6 col-sm-3 sidebar-offcanvas">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Quick Links</h3>
					</div>
					<div class="list-group">
						<a href="< ?php echo $LATEST_PH_RELEASE_NEWS; ? >" target="_blank" class="list-group-item"><i class="glyphicon glyphicon-comment"></i> Release Notes</a>
						<a href="http://svn.code.sf.net/p/processhacker/code/2.x/trunk/LICENSE.txt" target="_blank" class="list-group-item"><i class="glyphicon glyphicon-comment"></i> End User License Agreement</a>
						<a href="" target="_blank" class="list-group-item"><i class="glyphicon glyphicon-comment"></i> Checksums</a>
						<a href="forums/viewforum.php?f=5" target="_blank" class="list-group-item"><i class="glyphicon glyphicon-comment"></i> Ask a question</a>
						<a href="forums/viewforum.php?f=24" target="_blank" class="list-group-item"><i class="glyphicon glyphicon-fire"></i> Report a bug</a>
						<a href="http://sourceforge.net/projects/processhacker/" target="_blank" class="list-group-item"><i class="glyphicon glyphicon-globe"></i> SourceForge project page</a>
						<a href="https://github.com/processhacker2/processhacker2" target="_blank" class="list-group-item"><i class="glyphicon glyphicon-check"></i> Browse source code</a>
						<a href="http://processhacker.sourceforge.net/doc/" target="_blank" class="list-group-item"><i class="glyphicon glyphicon-edit"></i> Source code documentation</a>
					</div>
				</div>
			</div>-->
	</div>
</div>

<?php include "include/footer.php"; ?>