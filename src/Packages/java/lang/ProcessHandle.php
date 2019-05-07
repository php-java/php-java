<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang;

/**
 * The `ProcessHandle` interface was auto generated.
 */
interface ProcessHandle
{
    /**
     * Returns a snapshot of all processes visible to the current process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#allProcesses
     * @NotImplemented
     */
    // public static function static_allProcesses($a = null)

    /**
     * Returns a snapshot of the current direct children of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#children
     * @NotImplemented
     */
    // public function children($a = null)

    /**
     * Compares this ProcessHandle with the specified ProcessHandle for order.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#compareTo
     * @NotImplemented
     */
    // public function compareTo($a = null)

    /**
     * Returns a ProcessHandle for the current process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#current
     * @NotImplemented
     */
    // public static function static_current($a = null)

    /**
     * Returns a snapshot of the descendants of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#descendants
     * @NotImplemented
     */
    // public function descendants($a = null)

    /**
     * Requests the process to be killed.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#destroy
     * @NotImplemented
     */
    // public function destroy($a = null)

    /**
     * Requests the process to be killed forcibly.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#destroyForcibly
     * @NotImplemented
     */
    // public function destroyForcibly($a = null)

    /**
     * Returns true if other object is non-null, is of the same implementation, and represents the same system process; otherwise it returns false.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#equals
     * @NotImplemented
     */
    // public function equals($a = null)

    /**
     * Returns a hash code value for this ProcessHandle.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#hashCode
     * @NotImplemented
     */
    // public function hashCode($a = null)

    /**
     * Returns a snapshot of information about the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#info
     * @NotImplemented
     */
    // public function info($a = null)

    /**
     * Tests whether the process represented by this ProcessHandle is alive.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isAlive
     * @NotImplemented
     */
    // public function isAlive($a = null)

    /**
     * Returns an Optional&lt;ProcessHandle&gt; for an existing native process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#of
     * @NotImplemented
     */
    // public static function static_of($a = null)

    /**
     * Returns a CompletableFuture&lt;ProcessHandle&gt; for the termination of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#onExit
     * @NotImplemented
     */
    // public function onExit($a = null)

    /**
     * Returns an Optional&lt;ProcessHandle&gt; for the parent process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#parent
     * @NotImplemented
     */
    // public function parent($a = null)

    /**
     * Returns the native process ID of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#pid
     * @NotImplemented
     */
    // public function pid($a = null)

    /**
     * Returns true if the implementation of destroy() normally terminates the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#supportsNormalTermination
     * @NotImplemented
     */
    // public function supportsNormalTermination($a = null)
}
