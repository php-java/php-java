<?php
namespace PHPJava\Packages\java\io;

use PHPJava\Exceptions\NotImplementedException;
use PHPJava\Packages\java\lang\_Object;

// use PHPJava\Packages\java\io\FileFilter;
// use PHPJava\Packages\java\lang\Comparable;
// use PHPJava\Packages\java\nio\file\Path;

/**
 * The `File` class was auto generated.
 *
 * @parent \PHPJava\Packages\java\lang\_Object
 */
class File extends _Object /* implements FileFilter, Comparable, Path */
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
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#canExecute
     */
    public function canExecute($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the application can read the file denoted by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#canRead
     */
    public function canRead($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the application can modify the file denoted by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#canWrite
     */
    public function canWrite($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Compares two abstract pathnames lexicographically.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#compareTo
     */
    public function compareTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Atomically creates a new, empty file named by this abstract pathname if and only if a file with this name does not yet exist.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#createNewFile
     */
    public function createNewFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates an empty file in the default temporary-file directory, using the given prefix and suffix to generate its name.
     *  Creates a new empty file in the specified directory, using the given prefix and suffix strings to generate its name.
     *
     * @param mixed $a
     * @param mixed $b
     * @param mixed $c
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#createTempFile
     */
    public static function static_createTempFile($a = null, $b = null, $c = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deletes the file or directory denoted by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#delete
     */
    public function delete($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Requests that the file or directory denoted by this abstract pathname be deleted when the virtual machine terminates.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#deleteOnExit
     */
    public function deleteOnExit($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests this abstract pathname for equality with the given object.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#equals
     */
    public function equals($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the file or directory denoted by this abstract pathname exists.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#exists
     */
    public function exists($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the absolute form of this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getAbsoluteFile
     */
    public function getAbsoluteFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the absolute pathname string of this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getAbsolutePath
     */
    public function getAbsolutePath($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the canonical form of this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getCanonicalFile
     */
    public function getCanonicalFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the canonical pathname string of this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getCanonicalPath
     */
    public function getCanonicalPath($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of unallocated bytes in the partition named by this abstract path name.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getFreeSpace
     */
    public function getFreeSpace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the name of the file or directory denoted by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getName
     */
    public function getName($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the pathname string of this abstract pathname's parent, or null if this pathname does not name a parent directory.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getParent
     */
    public function getParent($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the abstract pathname of this abstract pathname's parent, or null if this pathname does not name a parent directory.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getParentFile
     */
    public function getParentFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Converts this abstract pathname into a pathname string.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getPath
     */
    public function getPath($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the size of the partition named by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getTotalSpace
     */
    public function getTotalSpace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the number of bytes available to this virtual machine on the partition named by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#getUsableSpace
     */
    public function getUsableSpace($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Computes a hash code for this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#hashCode
     */
    public function hashCode($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether this abstract pathname is absolute.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#isAbsolute
     */
    public function isAbsolute($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the file denoted by this abstract pathname is a directory.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#isDirectory
     */
    public function isDirectory($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the file denoted by this abstract pathname is a normal file.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#isFile
     */
    public function isFile($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Tests whether the file named by this abstract pathname is a hidden file.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#isHidden
     */
    public function isHidden($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the time that the file denoted by this abstract pathname was last modified.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#lastModified
     */
    public function lastModified($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the length of the file denoted by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#length
     */
    public function length($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns an array of strings naming the files and directories in the directory denoted by this abstract pathname.
     * Returns an array of strings naming the files and directories in the directory denoted by this abstract pathname that satisfy the specified filter.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#list
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
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#listFiles
     */
    public function listFiles($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * List the available filesystem roots.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#listRoots
     */
    public static function static_listRoots($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates the directory named by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#mkdir
     */
    public function mkdir($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Creates the directory named by this abstract pathname, including any necessary but nonexistent parent directories.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#mkdirs
     */
    public function mkdirs($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Renames the file denoted by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#renameTo
     */
    public function renameTo($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A convenience method to set the owner's execute permission for this abstract pathname.
     * Sets the owner's or everybody's execute permission for this abstract pathname.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setExecutable
     */
    public function setExecutable($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Sets the last-modified time of the file or directory named by this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setLastModified
     */
    public function setLastModified($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A convenience method to set the owner's read permission for this abstract pathname.
     * Sets the owner's or everybody's read permission for this abstract pathname.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setReadable
     */
    public function setReadable($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Marks the file or directory named by this abstract pathname so that only read operations are allowed.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setReadOnly
     */
    public function setReadOnly($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * A convenience method to set the owner's write permission for this abstract pathname.
     * Sets the owner's or everybody's write permission for this abstract pathname.
     *
     * @param mixed $a
     * @param mixed $b
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#setWritable
     */
    public function setWritable($a = null, $b = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns a java.nio.file.Path object constructed from this abstract path.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toPath
     */
    public function toPath($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Returns the pathname string of this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toString
     */
    public function toString($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Constructs a file: URI that represents this abstract pathname.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toURI
     */
    public function toURI($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }

    /**
     * Deprecated.This method does not automatically escape characters that are illegal in URLs.
     *
     * @param mixed $a
     * @return mixed
     * @throws NotImplementedException
     * @see https://docs.oracle.com/en/java/javase/11/docs/api/java.base/java/io/package-summary.html#toURL
     */
    public function toURL($a = null)
    {
        throw new NotImplementedException(__METHOD__);
    }
}
