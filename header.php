<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fuzzyshark
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<!--
Site designed and coded with blood, sweat, tears, and lots of love by the Seattle Central Creative Academy Portshowlio 2016 Web Team
Brenton Brookings, Giancarlo Cateriano, Nicholas Cavagnaro, Michel Debauge, Katherine Gatz, Angela Ivy, Joseph Lambert, Jenessa Johnson, 
Andrew Lawrence, Michael Woody, and lots of help from Barry Sevig

                                                     ,CLf0Lf1GL;:                                                            
                                                    ,LfLtCLC0Gf1fL1,                                                         
                                                    L0CLt;,,:,:f00Lt;                                                        
                                                   1CCi;::,,,,..:t000f:                                                      
                                                  100G;;:,,.,,..,:f80L1                                                      
                                                 .C88ttfCL,,,,,:i;i88G1;                                                     
                                                 :8@8ii1G:1i.:t,CCt8@Gf1                                                     
                                                 fG@0i::::::.,,,,,:C8GfLi                                                    
                                                  C08ti;;::;::,::i1080CLf                                                    
                                                1LG0G81i;::i;;,.:if@0GCtLC                                                   
                                                CG008Gtii1i::.;1;1@888CCf1                                                   
                                                 GCL00Gt1;;;::;;1C@8@CG0GG               i8@80t                              
                                                LC0C000CLft1i;i1fG808C00CGL            @8@88G0GGGG                           
                                                 ,,LG00Lt11i11ii1L8880G0GfC           @88888G0080G0                          
                                                ;1fG00GL1iii;;;;it0@8888CGL;Ci       80i::,,,,,::L8                          
                                 0808GGG00  ;t1tLfGC0GC1ii;i;;;;CfttCG880G880CLGGG   8Ct::,,,,;i1;C.                         
          ;CCGGLf             iGG0000GCCG00f;tfLLGL11ttLC00L1itLfGtffC88GLti;;tGGG08:8ftiL1f,:,f1:i.                         
        fC88808GCLft         GGG011;::;iG88GiCL1L1L1C80GG0@@8880tLffC101::,,,.,,,::GGCL;:,,i,:,,,:t                          
       LLCCGGCCLfffL1       C080f;:,,,::;C08ffff11i8888@@G8fiC8@8Cti110i::,,..,,,:;G0tGt:,:t;;,,,:1.                         
      LCL;;fti11ftLGCf      8808Li:::;f:i18@0fttLi@@@@0:,,,,::;C88ifi;Gi;;;t::it:;;;C  L1;Gf11f1:;                           
      LGi;:,,i1i1CGG0G1    L008Gt;i1,;;:;i080L11f@@@8;::,,,,::;t8811itL:;;;::,:;;i:;Lf  Cfii1:;i1L;                          
     tLG1i8C;;,i:G0;t01.   GG08C:::1:;,,;f000ff;i000fCCGCi;f0Gft@@i;itL;:,,::,::,,:i;  .CGCtiit0t;;GG                        
     ffCt::::;::,,::tft1  t0G00Gfi;:,:;i1C0G8011iCtt;:tii;iiii1i8iff1t1i;;;i;;iii;i11G0tffCCGGLi;;;iGGGG0  .0C888880         
     LtLL;::t;:1:;:;fLLt  C000GG0i;;;::iC0GG0GtCfttCi:::;,;;::;f;0i11ttC1i;::;:::i1LGG00Lfffft1;iii00GGGGi08@8888080080      
     f1f0ti1Lt11tf;iGLf1  G800GG08CftfGLG0GG8GtGLf1L;;;;:i;;;;i8@@i11;i1LGG11i11GGCGGGG0GCG::;;f00GGGGGGGG00LCGG008@@800     
    ;11fL01:i;,:::1L1ti111if0GGG0CGCLfiiLCLCGCfttLLCC1;;;i;;i1fCC1;;iG008LLGGGGCLL00GGGC0000CC0GGGGGGGG000C1:::,,,iL8@00L    
    .11tLG0G;::,:L1;::::::;;iLGG0fft1GCL800080G0G0tiCLC;;;;iGLGLCGGGGGGG000GLLfGG0GG0CCCCCCCGLCGGGGGGGG808Li::,,,,::1C000    
     t1tLCLfGG00Lti;::,,,,::;iLGLL:;008G0GC1LLL11G08i1fCCGGtiCfi1CGCCLLCCG08G@GCGG00CGG;:,,,,;GG0CGGGGGL00C;::;,:1i;t1@80    
   ;Gf1fLLf;;ii;t1i:::,,,:::;it0tL,008G;:,,,,,,::;fG80;;;i;fG1;;::,,:::;iCG0GC0G@C0000C::,,,,,:GG0GG0GGtff;:::;:;:i;;i00     
0000GL1LLLf1::::t1fiCL::;G;i1i1tt1800Ci:,,....,,::iGG8:::;,GLi;::,,,,,::i1CGGGGGGG80001CCL:::CGG000G00000C;:::;:;::::tf      
00000CfCLC1:,,,,tti11ii:;;tt;;1Ct;080ti:,,,.,.,,:;;G0C000000Lii:::,,,,,:;100G0GGG0800L;fGii,ifLGG00G@@@@@0i:ii;ti1i;if@@@L   
0000tCLCLLf::,,,,L;:,:1,;;,,:;tCf:80888000L:;G8CfCt0L00000LGf1iCLCt::itit1C0CGG0G8000;:,.::,;:,:f080@@@@@@Li:1:,:1:itG@@@@@  
00000CfLLL1,,:,,,8t;;;1L1:;;;iCLC88CGf;i::L:,i;;;iiC0000000Lfi;i;;;;:;1i;iG00GG00800Ci;1;::t:;f;f800L@@@@@LL::iti;itt@@@@@@@ 
0000CL1iffL:,,;,,,tt:;111ii:ii8888@10t::.:;:::;,,:;C0000000fLi;:::;;:i::;1t00GG08080Gti::itiC;:ifC880@@@CGLLC1ii;tC1LG@@@@@@@
88000LL;fft000;G00@C1i:::::ift8888L@@f11i;ifi;:;Lii000000000CC11f;CG1G;11L000@Gf0000C0C;;::,::;8CCG08CCCCCCtfLGGLt;iGCGCGGGC@
8800GLt;ttt00000G88tLCC;;;CLi18C888@@L1i:;:..,;::;10000000000CCCLCCCCCLCCL000LGG0GGGCG080Liii0GGGCCG0GCCCCCt1tf;1iitGCCCCGGGG
@00CGft1fttC0000088t;1LCLf1;;f888888G@L1i:;:::::;t@@@@@@@@@@@G0CfffLfLfCf@@@@@008CGCCCGGG000CfG0G0GC0GGCCCCCt1ff11fCCCCGGGGGG
@@@@@@@G000000000000i;;i;;;;i0888888888CGC;;:;;CCt@@@@@@@@@@@CCGGCCLLLLC@@@@@@@00CC080GGGttt1G0GC0GC0GGC@GGCCG:;;GG0G0@GGGGGG
@@@@@00000000000008088;;;;;;008808808G0CCCGGGGLti;1;008@@8Li1tfLCGGGGCLf1i8@0000GCGC000GCttiiG8CL0GCGGC0000GGGCGGGGGGGGGGGGGG
@@@000000000000000000088,,t0@80@@800081ffLCLCt1;;::0080888000011tfLLLfti800080G0G00G000GL0::188CCG0G0GG000000CGCGGGGGGGGGGGGG
@@0000000000000000000080G08000000000000iit111i;;80000000000088008888888808000008000CG0GCtt,:80G0000GGG0G000000GCGGGGGGGGGGGGG
@00008080000000000000000800000000000000000:.,i80000888888888000808888000000800000000000ft:,0GG080G800G00000000GGGGGGGGGGGGGGG
88008088000000000000000880000000000000000088888888888888800000000000000000000800000800G0::GG00000@880088008000GGGGGGGGGGGGGGG
8000888@800000000000000888000000000000000000088088888880000000000000000000000000800080080888888@8@808888008000GCGGGGGGGGGGGG0
000088888880000000000880080000000000000000000888888888000000800000000000000000008800880C880008888888@@80880808@@@@@@@@@@@@@@@
-->

<body <?php body_class(); ?>>
  <button id="comic-sans"></button>