/**
 * Creates new DecibelUrlBuilder.
 * @param url The API address.
 */
function DecibelUrlBuilder (url) {
    this.url = url;
}

/**
 * Gets an encoded URI containing the album search parameters.
 * @param searchParam The album search parameters.
 */
DecibelUrlBuilder.prototype.getAlbumSearchParameters = function(searchParam) {
	
	var param = "";

	if (!isEmpty(searchParam.AlbumTitle)) {
		param += "albumTitle=" + searchParam.AlbumTitle + "&";
	}

	if (!isEmpty(searchParam.Barcode)) {
		param += "barcode=" + searchParam.Barcode + "&";
	}

	if (!isEmpty(searchParam.ArtistName)) {
		param += "artist=" + searchParam.ArtistName + "&";
	}

	if (!isEmpty(searchParam.MusicBrainzID)) {
		param += "musicBrainzID=" + searchParam.MusicBrainzID + "&";
	}

	if (!isEmpty(searchParam.ExternalID)) {
		param += "externalID=" + searchParam.ExternalID + "&";
	}

	if (!isEmpty(searchParam.Genre)) {
		param += "genre=" + searchParam.Genre + "&";
	}

	if (!isEmpty(searchParam.Label)) {
		param += "label=" + searchParam.Label + "&";
	}

	if (!isEmpty(searchParam.Date)) {
		param += "date=" + searchParam.Date + "&";
	}

	if (!isEmpty(searchParam.Region)) {
		param += "region=" + searchParam.Region + "&";
	}

	if (!isEmpty(searchParam.PageSize)) {
		param += "pageSize=" + searchParam.PageSize + "&";
	}

	if (!isEmpty(searchParam.Depth)) {
		param += "depth=" + searchParam.Depth + "&";
	}

	if (!isEmpty(searchParam.LanguageID)) {
		param += "languageID=" + searchParam.LanguageID + "&";
	}

	if (!isEmpty(searchParam.Format)) {
		param += "format=" + searchParam.Format + "&";
	}

	param = param.substring(0, param.length - 1);
	return encodeURI(param);  	
};	

/**
 * Gets an encoded URI containing the participant search parameters.
 * @param searchParam The participant search parameters.
 */
DecibelUrlBuilder.prototype.getParticipantSearchParameters = function(searchParam) {
	
	var param = "";

	if (!isEmpty(searchParam.Name)) {
		param += "name=" + searchParam.Name + "&";
	}

	if (!isEmpty(searchParam.Activity)) {
		param += "activity=" + searchParam.Activity + "&";
	}

	if (!isEmpty(searchParam.Genre)) {
		param += "genre=" + searchParam.Genre + "&";
	}

	if (!isEmpty(searchParam.ExternalID)) {
		param += "externalID=" + searchParam.ExternalID + "&";
	}

	if (!isEmpty(searchParam.DateBorn)) {
		param += "dateBorn=" + searchParam.DateBorn + "&";
	}

	if (!isEmpty(searchParam.DateDied)) {
		param += "dateDied=" + searchParam.DateDied + "&";
	}

	if (!isEmpty(searchParam.PageSize)) {
		param += "pageSize=" + searchParam.PageSize + "&";
	}

	if (!isEmpty(searchParam.Depth)) {
		param += "depth=" + searchParam.Depth + "&";
	}

	if (!isEmpty(searchParam.LanguageID)) {
		param += "languageID=" + searchParam.LanguageID + "&";
	}

	if (!isEmpty(searchParam.Format)) {
		param += "fomat=" + searchParam.Format + "&";
	}

	param = param.substring(0, param.length - 1);
	return encodeURI(param);  	
};	

/**
 * Gets an encoded URI containing the track search parameters.
 * @param searchParam The track search parameters.
 */
DecibelUrlBuilder.prototype.getTrackSearchParameters = function(searchParam) {
	
	var param = "";

	if (!isEmpty(searchParam.TrackTitle)) {
		param += "trackTitle=" + searchParam.TrackTitle + "&";
	}

	if (!isEmpty(searchParam.ISRC)) {
		param += "isrc=" + searchParam.ISRC + "&";
	}

	if (!isEmpty(searchParam.Artist)) {
		param += "artist=" + searchParam.Artist + "&";
	}

	if (!isEmpty(searchParam.AlbumTitle)) {
		param += "albumTitle=" + searchParam.AlbumTitle + "&";
	}

	if (!isEmpty(searchParam.ExternalID)) {
		param += "externalID=" + searchParam.ExternalID + "&";
	}

	if (!isEmpty(searchParam.Genre)) {
		param += "genre=" + searchParam.Genre + "&";
	}

	if (!isEmpty(searchParam.Region)) {
		param += "region=" + searchParam.Region + "&";
	}

	if (!isEmpty(searchParam.PageSize)) {
		param += "pageSize=" + searchParam.PageSize + "&";
	}

	if (!isEmpty(searchParam.Depth)) {
		param += "depth=" + searchParam.Depth + "&";
	}

	if (!isEmpty(searchParam.LanguageID)) {
		param += "languageID=" + searchParam.LanguageID + "&";
	}

	if (!isEmpty(searchParam.Format)) {
		param += "format=" + searchParam.Format + "&";
	}

	param = param.substring(0, param.length - 1);
	return encodeURI(param);  	
};	

/**
 * Gets an encoded URI containing the work search parameters.
 * @param searchParam The work search parameters.
 */
DecibelUrlBuilder.prototype.getWorkSearchParameters = function(searchParam) {
	
	var param = "";

	if (!isEmpty(searchParam.Name)) {
		param += "name=" + searchParam.Name + "&";
	}

	if (!isEmpty(searchParam.Composers)) {
		param += "composers=" + searchParam.Composers + "&";
	}

	if (!isEmpty(searchParam.Catalogue)) {
		param += "catalogue=" + searchParam.Catalogue + "&";
	}

	if (!isEmpty(searchParam.CatalogueNumber)) {
		param += "catalogueNumber=" + searchParam.CatalogueNumber + "&";
	}

	if (!isEmpty(searchParam.ExternalID)) {
		param += "externalID=" + searchParam.ExternalID + "&";
	}

	if (!isEmpty(searchParam.PageSize)) {
		param += "pageSize=" + searchParam.PageSize + "&";
	}

	if (!isEmpty(searchParam.Depth)) {
		param += "depth=" + searchParam.Depth + "&";
	}

	if (!isEmpty(searchParam.LanguageID)) {
		param += "languageID=" + searchParam.LanguageID + "&";
	}

	if (!isEmpty(searchParam.Format)) {
		param += "format=" + searchParam.Format + "&";
	}

	param = param.substring(0, param.length - 1);
	return encodeURI(param);  	
};	

/**
 * Stores album search parameters.
 */
function AlbumSearchParam () {
	this.AlbumTitle = "";
	this.Barcode = "";
	this.ArtistName = "";
	this.MusicBrainzID = "";
	this.ExternalID = "";
	this.Genre = "";
	this.Label = "";
	this.Date = "";
	this.Region = "";
	this.PageSize = "";
	this.Depth = "";
	this.LanguageID = "";
	this.Format = "";  		
}	

/**
 * Stores participant search parameters.
 */
function ParticipantSearchParam () {
	this.Name = "";
	this.Activity = "";
	this.Genre = "";
	this.ExternalID = "";
	this.DateBorn = "";
	this.DateDied = "";
	this.PageSize = "";
	this.Depth = "";
	this.LanguageID = "";
	this.Format = "";
}	

/**
 * Stores track search parameters.
 */
function TrackSearchParam () {
	this.TrackTitle = "";
	this.AlbumTitle = "";
	this.ISRC = "";
	this.Artist = "";
	this.ExternalID = "";
	this.Genre = "";
	this.Region = "";
	this.PageSize = "";
	this.Depth = "";
	this.LanguageID = "";
	this.Format = "";
}	

/**
 * Stores work search parameters.
 */
function WorkSearchParam () {
	this.Name = "";
	this.Composers = "";
	this.Catalogue = "";
	this.CatalogueNumber = "";
	this.ExternalID = "";
	this.PageSize = "";
	this.Depth = "";
	this.LanguageID = "";
	this.Format = "";
}	

/**
 * Check if a string is empty, null or undefined.
 * @param str The string to test.
 */
function isEmpty(str) {
	return (!str || 0 === str.length);
}
