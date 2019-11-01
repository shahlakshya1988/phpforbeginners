<?php
/**
 * when the sql query has the where clause then the, system will have to scan for
 * all the records for matching the condition.
 * In case if the records were very high then it will take lots of time.
 * For example book, when searching for some info, if we take a look at index when
 * can find the information much faster, compared to searching whole book
 * Create a index on one or more columns, so when there were clause it executed the condition
 * is matched inside of the index. This more faster
 */