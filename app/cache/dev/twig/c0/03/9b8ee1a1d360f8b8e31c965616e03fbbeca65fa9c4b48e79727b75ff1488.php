<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_c0039b8ee1a1d360f8b8e31c965616e03fbbeca65fa9c4b48e79727b75ff1488 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  31 => 14,  23 => 12,  201 => 52,  142 => 31,  93 => 21,  39 => 6,  32 => 6,  29 => 3,  26 => 3,  20 => 1,  65 => 27,  27 => 14,  22 => 12,  19 => 1,  267 => 5,  218 => 97,  195 => 51,  193 => 83,  183 => 78,  173 => 72,  130 => 48,  82 => 34,  77 => 31,  47 => 17,  244 => 111,  237 => 109,  229 => 105,  200 => 94,  168 => 70,  162 => 39,  133 => 61,  127 => 59,  42 => 12,  33 => 16,  1026 => 311,  1009 => 307,  953 => 301,  950 => 300,  942 => 296,  926 => 287,  924 => 286,  920 => 285,  917 => 284,  912 => 280,  900 => 277,  898 => 276,  893 => 274,  884 => 270,  880 => 267,  877 => 265,  865 => 259,  841 => 257,  838 => 255,  828 => 250,  824 => 247,  820 => 245,  817 => 244,  806 => 235,  804 => 234,  802 => 233,  795 => 229,  791 => 227,  789 => 226,  787 => 225,  780 => 221,  777 => 216,  772 => 212,  752 => 208,  749 => 206,  747 => 205,  742 => 202,  739 => 200,  737 => 199,  728 => 192,  726 => 191,  723 => 190,  717 => 186,  714 => 185,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  690 => 174,  683 => 170,  664 => 160,  655 => 155,  653 => 154,  644 => 149,  641 => 148,  634 => 144,  630 => 141,  628 => 140,  625 => 139,  621 => 136,  619 => 135,  601 => 128,  596 => 127,  589 => 123,  586 => 122,  578 => 115,  572 => 112,  564 => 108,  559 => 104,  557 => 103,  553 => 101,  551 => 100,  547 => 99,  539 => 95,  508 => 88,  505 => 87,  477 => 80,  473 => 78,  468 => 77,  449 => 75,  442 => 71,  440 => 70,  430 => 65,  415 => 60,  413 => 59,  400 => 55,  397 => 54,  393 => 51,  381 => 47,  373 => 45,  363 => 38,  360 => 37,  340 => 27,  331 => 22,  329 => 21,  320 => 17,  303 => 13,  298 => 11,  290 => 5,  288 => 4,  281 => 310,  278 => 309,  260 => 291,  255 => 283,  245 => 269,  243 => 263,  240 => 262,  235 => 108,  220 => 232,  215 => 224,  212 => 58,  210 => 97,  207 => 91,  204 => 53,  202 => 212,  199 => 86,  191 => 194,  189 => 82,  186 => 81,  184 => 47,  174 => 85,  171 => 43,  169 => 168,  166 => 167,  164 => 79,  161 => 162,  149 => 60,  139 => 30,  124 => 57,  121 => 107,  109 => 48,  101 => 73,  71 => 15,  61 => 24,  1102 => 321,  1096 => 318,  1086 => 376,  1079 => 374,  1076 => 372,  1060 => 370,  1054 => 369,  1037 => 368,  1035 => 312,  1033 => 366,  1023 => 310,  1003 => 306,  979 => 323,  974 => 321,  968 => 318,  958 => 310,  941 => 307,  918 => 305,  915 => 304,  905 => 300,  901 => 299,  895 => 296,  872 => 263,  863 => 258,  859 => 280,  855 => 279,  851 => 278,  837 => 272,  831 => 251,  825 => 269,  818 => 267,  813 => 239,  810 => 238,  808 => 263,  799 => 232,  793 => 228,  790 => 254,  788 => 253,  784 => 224,  781 => 250,  766 => 248,  763 => 247,  760 => 246,  757 => 245,  755 => 244,  732 => 197,  724 => 233,  721 => 232,  704 => 182,  687 => 173,  682 => 227,  677 => 226,  674 => 165,  671 => 224,  661 => 218,  654 => 216,  637 => 145,  611 => 129,  597 => 206,  594 => 126,  585 => 200,  581 => 118,  579 => 116,  576 => 113,  574 => 195,  567 => 109,  561 => 171,  549 => 167,  542 => 96,  536 => 187,  534 => 186,  531 => 185,  525 => 92,  520 => 180,  517 => 179,  514 => 178,  494 => 175,  491 => 174,  489 => 167,  475 => 79,  469 => 160,  466 => 76,  463 => 158,  460 => 157,  454 => 156,  450 => 155,  429 => 149,  426 => 63,  423 => 147,  420 => 146,  417 => 145,  414 => 144,  411 => 143,  401 => 137,  398 => 136,  387 => 49,  379 => 130,  376 => 46,  369 => 125,  366 => 123,  359 => 120,  351 => 119,  348 => 118,  345 => 30,  328 => 111,  325 => 110,  319 => 108,  316 => 107,  307 => 105,  304 => 104,  280 => 94,  273 => 304,  266 => 294,  258 => 284,  253 => 274,  238 => 250,  227 => 104,  221 => 77,  217 => 231,  206 => 54,  179 => 76,  177 => 45,  172 => 59,  156 => 64,  154 => 37,  151 => 36,  148 => 55,  145 => 68,  143 => 56,  125 => 47,  117 => 53,  114 => 51,  111 => 44,  108 => 40,  99 => 54,  94 => 43,  91 => 35,  89 => 40,  312 => 106,  301 => 12,  295 => 142,  283 => 95,  277 => 93,  274 => 135,  272 => 134,  269 => 6,  265 => 130,  236 => 109,  216 => 60,  209 => 92,  203 => 89,  197 => 197,  187 => 48,  182 => 64,  176 => 73,  170 => 71,  165 => 40,  160 => 76,  158 => 75,  153 => 72,  141 => 55,  136 => 138,  132 => 27,  123 => 46,  120 => 45,  104 => 45,  98 => 47,  72 => 25,  51 => 12,  1031 => 295,  1028 => 294,  1025 => 293,  1021 => 326,  1017 => 324,  1011 => 321,  1008 => 320,  1006 => 319,  1000 => 305,  992 => 315,  989 => 314,  987 => 313,  984 => 312,  978 => 302,  976 => 309,  973 => 308,  967 => 306,  965 => 305,  962 => 304,  956 => 302,  954 => 301,  951 => 300,  945 => 298,  943 => 297,  940 => 296,  938 => 295,  935 => 294,  932 => 291,  928 => 264,  922 => 261,  919 => 260,  916 => 259,  913 => 258,  909 => 301,  904 => 278,  896 => 275,  891 => 275,  887 => 271,  885 => 272,  881 => 290,  875 => 264,  873 => 267,  869 => 265,  867 => 282,  864 => 257,  861 => 256,  858 => 255,  853 => 286,  850 => 255,  847 => 277,  842 => 275,  840 => 291,  835 => 253,  833 => 252,  830 => 253,  827 => 252,  822 => 246,  819 => 243,  815 => 242,  811 => 240,  805 => 262,  800 => 236,  794 => 235,  782 => 233,  779 => 232,  775 => 231,  769 => 249,  762 => 227,  758 => 226,  750 => 242,  744 => 203,  741 => 222,  738 => 240,  735 => 198,  730 => 219,  727 => 218,  725 => 217,  722 => 216,  719 => 187,  712 => 214,  709 => 213,  706 => 212,  703 => 211,  697 => 210,  694 => 209,  691 => 208,  688 => 206,  681 => 169,  678 => 168,  672 => 164,  669 => 163,  665 => 220,  662 => 159,  659 => 158,  656 => 198,  650 => 153,  646 => 150,  632 => 186,  626 => 184,  623 => 183,  620 => 213,  616 => 133,  613 => 243,  610 => 198,  608 => 210,  605 => 209,  602 => 208,  599 => 207,  593 => 247,  591 => 124,  587 => 179,  584 => 178,  577 => 114,  575 => 252,  571 => 194,  569 => 110,  566 => 177,  563 => 176,  555 => 102,  552 => 168,  544 => 97,  541 => 157,  533 => 151,  530 => 150,  526 => 147,  522 => 91,  516 => 143,  513 => 142,  510 => 141,  496 => 176,  490 => 138,  486 => 136,  480 => 82,  472 => 132,  470 => 131,  467 => 130,  464 => 129,  446 => 74,  443 => 154,  441 => 153,  438 => 69,  435 => 151,  432 => 66,  428 => 64,  424 => 62,  422 => 150,  418 => 148,  416 => 123,  405 => 58,  402 => 56,  399 => 112,  395 => 135,  391 => 109,  385 => 48,  382 => 131,  372 => 127,  367 => 102,  364 => 122,  361 => 121,  353 => 96,  346 => 93,  341 => 173,  338 => 114,  333 => 23,  330 => 92,  327 => 154,  321 => 109,  317 => 16,  314 => 86,  311 => 85,  297 => 84,  292 => 82,  289 => 140,  285 => 3,  262 => 76,  259 => 118,  256 => 74,  250 => 113,  248 => 270,  242 => 101,  239 => 68,  234 => 64,  231 => 99,  225 => 238,  219 => 101,  214 => 99,  208 => 96,  205 => 90,  196 => 51,  192 => 90,  185 => 66,  181 => 46,  175 => 43,  159 => 66,  155 => 39,  152 => 72,  147 => 34,  138 => 61,  131 => 60,  128 => 47,  122 => 25,  113 => 23,  107 => 47,  84 => 19,  79 => 29,  74 => 16,  66 => 25,  64 => 25,  60 => 21,  58 => 18,  54 => 25,  44 => 8,  118 => 32,  86 => 37,  75 => 28,  67 => 22,  63 => 22,  57 => 9,  48 => 21,  40 => 13,  35 => 5,  21 => 1,  392 => 107,  389 => 133,  383 => 104,  377 => 102,  374 => 104,  368 => 41,  365 => 39,  362 => 97,  354 => 95,  352 => 34,  349 => 33,  342 => 28,  337 => 26,  335 => 100,  332 => 88,  326 => 19,  324 => 18,  318 => 83,  315 => 150,  309 => 148,  305 => 77,  302 => 103,  299 => 102,  293 => 7,  287 => 71,  284 => 70,  282 => 78,  279 => 77,  276 => 305,  271 => 300,  268 => 299,  263 => 4,  257 => 56,  252 => 3,  233 => 107,  230 => 61,  224 => 103,  222 => 237,  211 => 73,  194 => 196,  190 => 69,  167 => 41,  150 => 71,  146 => 58,  144 => 144,  140 => 52,  137 => 29,  134 => 28,  129 => 26,  126 => 121,  119 => 24,  116 => 94,  110 => 22,  105 => 39,  102 => 44,  97 => 41,  95 => 28,  90 => 20,  87 => 35,  81 => 32,  78 => 16,  76 => 27,  69 => 14,  59 => 12,  55 => 15,  52 => 19,  46 => 14,  43 => 14,  41 => 19,  38 => 18,  36 => 4,  30 => 5,  24 => 2,  115 => 40,  112 => 52,  106 => 86,  100 => 43,  96 => 53,  92 => 38,  88 => 28,  83 => 30,  80 => 17,  73 => 26,  70 => 26,  62 => 24,  56 => 11,  53 => 10,  50 => 15,  45 => 8,  12 => 36,);
    }
}
