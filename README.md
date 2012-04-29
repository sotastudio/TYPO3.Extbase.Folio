# Folio

## Installation

### Via Git

Clone into typo3conf/ext/

	git clone git@github.com:andyhausmann/TYPO3_Extension_Folio.git /path/to/project/typo3conf/ext/folio/

Install by Extension Manager as usual.

### Via TER

Coming soon…


## Configuration

* Include **static Extension Template**
* Create **Frontend plugin**
	* Adjust the **Plugin Settings** to your needs
	* Setup **Record Storage Page** where the Slider Items come from
* Create **Customer** and **Projects** on the Record Storage Page (should be a SysFolder).
* Check the Frontend!


### TypoScript Constants ###

_This section isn't completed yet._

	plugin.tx_flexslider {
		settings {
			view {
				# Necessary options, if you plan to manipulate the templates
				templateRootPath = EXT:folio/Resources/Private/Templates/
				partialRootPath = EXT:folio/Resources/Private/Partials/
				layoutRootPath = EXT:folio/Resources/Private/Layouts/
			}
			persistence {
				# Here you can set up the Record Storage Page globally
				storagePid = 
			}
			settings {
				# String: File reference to the Ext's Css file - empty this value if you want to include this at your own
				css = EXT:folio/Resources/Public/Css/styles.css
				lib {
					# String: File reference to alternative jQuery library if EXT t3jquery is not in use
					jQuery = EXT:folio/Resources/Public/Js/jquery-min.js
					# Bool: Flag to define whether the script shoul be moved to the footer or not
					moveToFooter = 0
				}
			}
		}
	}



## How to

Coming soon...


## Roadmap and Tasks

Plase take a look at the Github Issue Tracker for this projekt.


## Contribute

If you have ideas, feature or bug requests, don't hesitate and report them at the Issue Tracker.

Feel also free to fork and pull.