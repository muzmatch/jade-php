<?php

namespace Jade\Compiler;

/**
 * Class Jade CompilerConfig.
 * Definitions and low level settings.
 */
abstract class CompilerConfig
{
    /**
     * @const string
     */
    const VARNAME = '[a-zA-Z\\\\\\x7f-\\xff][a-zA-Z0-9\\\\_\\x7f-\\xff]*';

    /**
     * @const string
     */
    const ESCAPED = 'echo htmlspecialchars(%s)';

    /**
     * @const string
     */
    const UNESCAPED = 'echo \\Jade\\Compiler::strval(%s)';

    /**
     * @var array
     */
    protected $doctypes = array(
        '5' => '<!DOCTYPE html>',
        'html' => '<!DOCTYPE html>',
        'default' => '<!DOCTYPE html>',
        'xml' => '<<?php echo "?"; ?>xml version="1.0" encoding="utf-8" <?php echo "?"; ?>>',
        'transitional' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',
        'strict' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',
        'frameset' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">',
        '1.1' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">',
        'basic' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">',
        'mobile' => '<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">',
    );

    /**
     * @var array
     */
    protected $selfClosing = array('meta', 'img', 'link', 'input', 'source', 'area', 'base', 'col', 'br', 'hr');

    /**
     * @var array
     */
    protected $phpKeywords = array('true', 'false', 'null', 'switch', 'case', 'default', 'endswitch', 'if', 'elseif', 'else', 'endif', 'while', 'endwhile', 'do', 'for', 'endfor', 'foreach', 'endforeach', 'as', 'unless');

    /**
     * @var array
     */
    protected $phpOpenBlock = array('switch', 'if', 'else if', 'elseif', 'else', 'while', 'do', 'foreach', 'for', 'unless');

    /**
     * @var array
     */
    protected $phpCloseBlock = array('endswitch', 'endif', 'endwhile', 'endfor', 'endforeach');
}
