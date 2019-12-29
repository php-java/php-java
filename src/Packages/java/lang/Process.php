<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;

// use PHPJava\Packages\java\util\stream\Stream;
// use PHPJava\Packages\java\lang\ProcessHandle;

/**
 * The `Process` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Process extends _Object // implements Stream, ProcessHandle
{
    /**
     * Returns a snapshot of the direct children of the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#children
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function children($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a snapshot of the descendants of the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#descendants
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function descendants($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Kills the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#destroy
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function destroy($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Kills the process forcibly.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#destroyForcibly
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function destroyForcibly($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the exit value for the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#exitValue
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function exitValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the input stream connected to the error output of the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getErrorStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getErrorStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the input stream connected to the normal output of the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getInputStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getInputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the output stream connected to the normal input of the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getOutputStream
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getOutputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a snapshot of information about the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#info
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function info($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the process represented by this Process is alive.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isAlive
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isAlive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a CompletableFuture&lt;Process&gt; for the termination of the Process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#onExit
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function onExit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the native process ID of the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#pid
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function pid($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the implementation of destroy() is to normally terminate the process, Returns false if the implementation of destroy forcibly and immediately terminates the process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#supportsNormalTermination
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function supportsNormalTermination($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a ProcessHandle for the Process.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toHandle
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toHandle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Causes the current thread to wait, if necessary, until the process represented by this Process object has terminated.
     * Causes the current thread to wait, if necessary, until the process represented by this Process object has terminated, or the specified waiting time elapses.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#waitFor
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function waitFor($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
