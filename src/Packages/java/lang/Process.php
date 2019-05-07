<?php
namespace PHPJava\Packages\java\lang;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\util\stream\Stream;
// use PHPJava\Packages\java\lang\ProcessHandle;

/**
 * The `Process` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class Process extends _Object /* implements Stream, ProcessHandle */
{

    /**
     * Returns a snapshot of the direct children of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#children
     */
    public function children($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a snapshot of the descendants of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#descendants
     */
    public function descendants($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Kills the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#destroy
     */
    public function destroy($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Kills the process forcibly.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#destroyForcibly
     */
    public function destroyForcibly($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the exit value for the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#exitValue
     */
    public function exitValue($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the input stream connected to the error output of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getErrorStream
     */
    public function getErrorStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the input stream connected to the normal output of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getInputStream
     */
    public function getInputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the output stream connected to the normal input of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#getOutputStream
     */
    public function getOutputStream($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a snapshot of information about the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#info
     */
    public function info($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the process represented by this Process is alive.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#isAlive
     */
    public function isAlive($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a CompletableFuture&lt;Process&gt; for the termination of the Process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#onExit
     */
    public function onExit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the native process ID of the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#pid
     */
    public function pid($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns true if the implementation of destroy() is to normally terminate the process, Returns false if the implementation of destroy forcibly and immediately terminates the process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#supportsNormalTermination
     */
    public function supportsNormalTermination($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a ProcessHandle for the Process.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#toHandle
     */
    public function toHandle($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Causes the current thread to wait, if necessary, until the process represented by this Process object has terminated.
     * Causes the current thread to wait, if necessary, until the process represented by this Process object has terminated, or the specified waiting time elapses.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/lang/package-summary.html#waitFor
     */
    public function waitFor($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
