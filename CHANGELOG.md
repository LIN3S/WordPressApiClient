Changelog
=================================
This changelog references the relevant changes done between versions.

- **[0.7.1] - (2018-03-19)**
    - DELETE resource call implemented. 

- **[0.7.0] - (2018-03-08)**
    - A problem was found when retrieving categories and tags from the WP API: English data was not being appended in the *_embed*
    field while in Spanish worked properly. As result, those data was not being shown in the pages. The change implies to
    modify the WPML configuration at "WPML > Language URL Format" to "Different Languages in the directories" and check the
    "Use the directory for the default language" field.