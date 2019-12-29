<?php
declare(strict_types=1);
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\Object_;

// use PHPJava\Packages\java\io\FileFilter;
// use PHPJava\Packages\java\lang\Comparable;
// use PHPJava\Packages\java\nio\file\Path;

/**
 * The `File` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\Object_
 */
class File extends Object_ // implements FileFilter, Comparable, Path
{
    /**
     * The system-dependent path-separator character, represented as a string for convenience.
     *
     * @var mixed $pathSeparator
     */
    public static $pathSeparator = null;

    /**
     * The system-dependent path-separator character.
     *
     * @var mixed $pathSeparatorChar
     */
    public static $pathSeparatorChar = null;

    /**
     * The system-dependent default name-separator character, represented as a string for convenience.
     *
     * @var mixed $separator
     */
    public static $separator = null;

    /**
     * The system-dependent default name-separator character.
     *
     * @var mixed $separatorChar
     */
    public static $separatorChar = null;

    /**
     * Tests whether the application can execute the file denoted by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#canExecute
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function canExecute($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the application can read the file denoted by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#canRead
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function canRead($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the application can modify the file denoted by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#canWrite
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function canWrite($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares two abstract pathnames lexicographically.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#compareTo
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function compareTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically creates a new, empty file named by this abstract pathname if and only if a file with this name does not yet exist.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#createNewFile
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function createNewFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates an empty file in the default temporary-file directory, using the given prefix and suffix to generate its name.
     *  Creates a new empty file in the specified directory, using the given prefix and suffix strings to generate its name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#createTempFile
     * @param null|mixed $a
     * @param null|mixed $b
     * @param null|mixed $c
     * @throws NotImplementedException
     */
    public static function static_createTempFile($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deletes the file or directory denoted by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#delete
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function delete($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Requests that the file or directory denoted by this abstract pathname be deleted when the virtual machine terminates.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#deleteOnExit
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function deleteOnExit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests this abstract pathname for equality with the given object.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#equals
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the file or directory denoted by this abstract pathname exists.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#exists
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function exists($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the absolute form of this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getAbsoluteFile
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAbsoluteFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the absolute pathname string of this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getAbsolutePath
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getAbsolutePath($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the canonical form of this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getCanonicalFile
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getCanonicalFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the canonical pathname string of this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getCanonicalPath
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getCanonicalPath($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of unallocated bytes in the partition named by this abstract path name.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getFreeSpace
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getFreeSpace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the name of the file or directory denoted by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getName
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the pathname string of this abstract pathname's parent, or null if this pathname does not name a parent directory.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getParent
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getParent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the abstract pathname of this abstract pathname's parent, or null if this pathname does not name a parent directory.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getParentFile
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getParentFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts this abstract pathname into a pathname string.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getPath
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getPath($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the size of the partition named by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getTotalSpace
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getTotalSpace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of bytes available to this virtual machine on the partition named by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getUsableSpace
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function getUsableSpace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Computes a hash code for this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#hashCode
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether this abstract pathname is absolute.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#isAbsolute
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isAbsolute($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the file denoted by this abstract pathname is a directory.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#isDirectory
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isDirectory($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the file denoted by this abstract pathname is a normal file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#isFile
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the file named by this abstract pathname is a hidden file.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#isHidden
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function isHidden($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the time that the file denoted by this abstract pathname was last modified.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#lastModified
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function lastModified($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the length of the file denoted by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#length
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function length($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array of strings naming the files and directories in the directory denoted by this abstract pathname.
     * Returns an array of strings naming the files and directories in the directory denoted by this abstract pathname that satisfy the specified filter.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#list
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function list($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array of abstract pathnames denoting the files in the directory denoted by this abstract pathname.
     * Returns an array of abstract pathnames denoting the files and directories in the directory denoted by this abstract pathname that satisfy the specified filter.
     * Returns an array of abstract pathnames denoting the files and directories in the directory denoted by this abstract pathname that satisfy the specified filter.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#listFiles
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function listFiles($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * List the available filesystem roots.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#listRoots
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public static function static_listRoots($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates the directory named by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#mkdir
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function mkdir($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates the directory named by this abstract pathname, including any necessary but nonexistent parent directories.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#mkdirs
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function mkdirs($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Renames the file denoted by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#renameTo
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function renameTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A convenience method to set the owner's execute permission for this abstract pathname.
     * Sets the owner's or everybody's execute permission for this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setExecutable
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setExecutable($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the last-modified time of the file or directory named by this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setLastModified
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setLastModified($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A convenience method to set the owner's read permission for this abstract pathname.
     * Sets the owner's or everybody's read permission for this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setReadable
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setReadable($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Marks the file or directory named by this abstract pathname so that only read operations are allowed.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setReadOnly
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function setReadOnly($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A convenience method to set the owner's write permission for this abstract pathname.
     * Sets the owner's or everybody's write permission for this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setWritable
     * @param null|mixed $a
     * @param null|mixed $b
     * @throws NotImplementedException
     */
    public function setWritable($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a java.nio.file.Path object constructed from this abstract path.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toPath
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toPath($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the pathname string of this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toString
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a file: URI that represents this abstract pathname.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toURI
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toURI($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method does not automatically escape characters that are illegal in URLs.
     *
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toURL
     * @param null|mixed $a
     * @throws NotImplementedException
     */
    public function toURL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
