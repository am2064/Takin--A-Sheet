Takin A Sheet
=============

An API for Roleplayers

What is this?
-------------

As it is currently, this is a read-only api that provides support for listing
users, their characters, character's general info, and item info.

The API 
--------

###users###

####all####

This provides you a list of all the users on the system. Use it sparingly.

attribute    | value     | description                | possible values                       | example value
----------   | -------   | -------------              | -----------------                     | --------------
`id`         | `integer` | User ID Number             | 1-9999999999999                       | 9001
`name`       | `string`  | User Name                  | text                                  | Earl
`created_at` | `string`  | Creation Date and Time     | text in format of YYYY-MM-DD HH:MM:SS | 2014-02-27 09:33:37
`updated_at` | `string`  | Last updated Date and Time | text in format of YYYY-MM-DD HH:MM:SS | 2014-02-27 09:33:37

####individual####

attribute    | value     | description                           | possible values                                                             | example value
----------   | -------   | -------------                         | -----------------                                                           | --------------
`id`         | `integer` | User ID Number                        | 1-9999999999999                                                             | 9001
`name`       | `string`  | User Name                             | text                                                                        | Earl
`created_at` | `string`  | Creation Date and Time                | text in format of YYYY-MM-DD HH:MM:SS                                       | 2014-02-27 09:33:37
`updated_at` | `string`  | Last updated Date and Time            | text in format of YYYY-MM-DD HH:MM:SS                                       | 2014-02-27 09:33:37
`characters` | `array`   | An array of all the user's characters | Objects with character name, owner_id, game_id, description, and timestamps | JSON Object



###characters###

####all####

This is the same character object that is returned to a user list.
Use this sparingly as well.

attribute    | value     | description                | possible values                       | example value
----------   | -------   | -------------              | -----------------                     | --------------
`id`         | `integer` | Character ID Number        | 1-9999999999999                       | 9001
`name`       | `string`  | Character Name             | text                                  | Earl
`owner_id`   | `integer` | Owner ID Number            | 1-9999999999999                       | 903
`game_id`    | `integer` | Game ID Number             | 1-9999999999999                       | 904
`created_at` | `string`  | Creation Date and Time     | text in format of YYYY-MM-DD HH:MM:SS | 2014-02-27 09:33:37
`updated_at` | `string`  | Last updated Date and Time | text in format of YYYY-MM-DD HH:MM:SS | 2014-02-27 09:33:37

####individual####

attribute    | value     | description                                   | possible values                                                                  | example value
----------   | -------   | -------------                                 | -----------------                                                                | --------------
`id`         | `integer` | Character ID Number                           | 1-9999999999999                                                                  | 9001
`name`       | `string`  | Character Name                                | text                                                                             | Earl
`owner_id`   | `integer` | Owner ID Number                               | 1-9999999999999                                                                  | 903
`game_id`    | `integer` | Game ID Number                                | 1-9999999999999                                                                  | 904
`stats`      | `array`   | An array of all the character's stats         | Objects with character name, owner_id, game_id, description, and timestamps      | JSON Object
`skills`     | `array`   | An array of all the character's skills        | Objects with skill name, character_id, score, bonus, and timestamps              | JSON Object
`inventory`  | `array`   | An array of all the character's inventory     | Objects with item name, character_id, amount, bonus, description, and timestamps | JSON Object
`abilities`  | `array`   | An array of all the character's abilities     | Objects with ability name, character_id, description, and timestamps             | JSON Object
`game`       | `array`   | An array of the character's game information  | Object with game's name, description, and timestamps                             | JSON Object
`owner`      | `array`   | An array of the character's owner information | Object with owner's name and timestamps                                          | JSON Object
`created_at` | `string`  | Creation Date and Time                        | text in format of YYYY-MM-DD HH:MM:SS                                            | 2014-02-27 09:33:37
`updated_at` | `string`  | Last updated Date and Time                    | text in format of YYYY-MM-DD HH:MM:SS                                            | 2014-02-27 09:33:37


###items###

Items only exist on an individual scale. There is no massive list of them available.

attribute     | value     | description                                                      | possible values                       | example value
----------    | -------   | -------------                                                    | -----------------                     | --------------
`id`          | `integer` | Character ID Number                                              | 1-9999999999999                       | 9001
`name`        | `string`  | Character Name                                                   | text                                  | Earl
`owner_id`    | `integer` | Owner ID Number                                                  | 1-9999999999999                       | 903
`amount`      | `integer` | Amount of item owned by owner                                    | 1-9999999999999                       | 50
`bonus`       | `integer` | Item's bonus. This can be something like how much a potion heals | 1-9999999999999                       | 50
`description` | `string`  | The item's description                                           | text                                  | Fokin Sord
`created_at`  | `string`  | Creation Date and Time                                           | text in format of YYYY-MM-DD HH:MM:SS | 2014-02-27 09:33:37
`updated_at`  | `string`  | Last updated Date and Time                                       | text in format of YYYY-MM-DD HH:MM:SS | 2014-02-27 09:33:37
