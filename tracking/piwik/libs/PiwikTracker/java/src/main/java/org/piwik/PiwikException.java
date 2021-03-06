/**
 * Piwik - Open source web analytics
 * 
 * @license released under BSD License http://www.opensource.org/licenses/bsd-license.php
 * @version $Id: PiwikException.java 216 2013-04-02 08:24:45Z r23 $
 * @link http://piwik.org/docs/tracking-api/
 *
 * @category Piwik
 * @package PiwikTracker
 */
package org.piwik;

/**
 *
 * @author Martin Fochler
 * @version 1.0
 */
public class PiwikException extends Exception {

	public PiwikException(final String message) {
		super(message);
	}

	public PiwikException(final String message, final Throwable e) {
		super(message, e);
	}
}
