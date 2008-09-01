<?php

class UploadFromUpload extends UploadBase {
	function initialize( $tempPath, $fileSize, $fileName ) {
		$this->mTempPath       = $tempPath;
		$this->mFileSize       = $fileSize;
		$this->mSrcName        = $fileName;
		$this->mSessionKey     = false;
		$this->mStashed        = false;
		$this->mRemoveTempFile = false; // PHP will handle this
	}
}
