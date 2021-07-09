<?php
	// Read and write for owner, nothing for everybody else
	chmod("data1.txt",0600);

	// Read and write for owner, read for everybody else
	chmod("data1.txt",0644);

	// Everything for owner, read and execute for everybody else
	chmod("data1.txt",0755);

	// Everything for owner, read for owner's group
	chmod("data1.txt",0740);
?>