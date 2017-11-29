<?php
namespace Drupal\mycache\Theme;
use Drupal\Core\Theme\ThemeNegotiatorInterface;
use Drupal\Core\Routing\RouteMatchInterface;

class MycacheThemeswitcherNegotiator implements ThemeNegotiatorInterface {
    public function applies(RouteMatchInterface $route_match){
        $applies = TRUE;
        return $applies;
    }

    /**
     * {@inheritdoc}
     */
    public function determineActiveTheme(RouteMatchInterface $route_match) {

        if(isset($_COOKIE['blind_theme']) && $_COOKIE['blind_theme'] == 'text'){
            return 'stark';
        }else{
            //ичего не меняем, оставляем как было
            return;
        }
    }
}
?>
