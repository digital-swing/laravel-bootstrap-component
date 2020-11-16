<?php

namespace DigitalSwing\LBC\View\Compilers;

use Illuminate\View\Compilers\BladeCompiler as BaseBladeCompiler;

class RootsBladeCompiler extends BaseBladeCompiler
{
    /**
     * Compile the lang statements into valid PHP.
     *
     * @param  string|null  $expression
     * @return string
     */
    protected function compileLang($expression)
    {
        if (is_null($expression)) {
            return '<?php $__env->startTranslation(); ?>';
        } elseif ($expression[1] === '[') {
            return "<?php \$__env->startTranslation{$expression}; ?>";
        }

        return "<?php echo Roots\app('translator')->get{$expression}; ?>";
    }
}
