<?


class CreateForo extends FeatureTestCase
{

    
    public function test_visit_forum()
    {
    	$this->visit(route('forum'))
    		->seeText('Forum');
    }
}
