# CHANGELOG

This changelog references the relevant changes done between versions.

To get the diff for a specific change, go to https://github.com/LIN3S/WordPressApiClient/commit/XXX where XXX is the change hash 
To get the diff between two versions, go to https://github.com/LIN3S/WordPressApiClient/compare/v0.6.0...v0.7.0

* 0.7.0 - (2018-03-08)
    * A problem was found when retrieving categories and tags from the WP API: English data was not being appended in the *_embed*
field while in Spanish worked properly. As result, those data was not being shown in the pages. The change implies to
modify the WPML configuration at "WPML > Language URL Format" to "Different Languages in the directories" and check the
"Use the directory for the default language" field.
