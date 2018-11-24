class ApplicationController < ActionController::Base
  def showIndex  
    render template: "index" 
  end
end
