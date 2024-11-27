@extends('layout.master')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Agent List</title>
    </head>
    <body>
      <h1 class="title">Agents List</h1>
      <div class="aligning">
        <div class="search-agent">
          <form class="d-flex" role="search">
              <input class="agent-control me-2" type="search" placeholder="Cari agen" aria-label="Search">
              <button class="btn" type="submit">
                  <img src="{{ asset('images/Search Icon.png') }}" alt="search">
                </button>
              </form>
            </div>
          </div>
          <div class="spacing"></div>
      <div class="agents">
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent1.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Christopher</h4>
          <p>Experienced real estate agent helping clients find their dream homes with personalized guidance.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent1.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Natasha</h4>
          <p>Expert in local market trends and property insights.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent3.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Ashin</h4>
          <p>Bringing expertise and dedication to every transaction.</p>
        </div>
      </div>
    </div>
    <div class="agents">
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent4.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Vanhoverr</h4>
          <p>Committed to making your real estate journey seamless and successful.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent1.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Jonathan</h4>
          <p>Dedicated to helping you buy, sell, and invest with confidence.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent6.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Jayson</h4>
          <p>Building lasting relationships through trusted service.</p>
        </div>
      </div>
    </div>
    <div class="agents">
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent1.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Jennifer</h4>
          <p>Helping clients find their dream homes with expertise and care.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent1.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Diantara</h4>
          <p>Your trusted advisor for all things real estate.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent1.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Nelana</h4>
          <p>Specialist in finding homes that fit your lifestyle.</p>
        </div>
      </div>
    </div>
    <div class="agents">
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent1.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Nikita</h4>
          <p>Turning real estate dreams into reality, one client at a time.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent11.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Darren</h4>
          <p>Committed to making home buying and selling stress-free.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent1.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Daratista</h4>
          <p>Connecting clients with properties that inspire and excite.</p>
        </div>
      </div>
    </div>
    <div class="agents">
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent13.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Bryan</h4>
          <p>Specializing in luxury properties and seamless transactions.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent14.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Steve Roger</h4>
          <p>Over a decade of experience in residential real estate.</p>
        </div>
      </div>
      <div class="agent-card">
        <img src="{{ asset('images/agents/agent15.png')}}" alt="agent 1" style="height:100px; margin-right: 10px">
        <div>
          <h4 class="agent-title">Agent Gamora</h4>
          <p>Helping clients achieve their real estate goals effortlessly.</p>
        </div>
      </div>
    </div>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
    </body>
    </html>
@endsection

<style>


.page-link {
  color: black !important; 
  outline: 2px solid #44D7B5 !important; 
  border-radius: 5px; 
  width: 50px;
  height: 50px;
  text-align: center;
  align-content: center;
}

.page-item {
  margin: 0 10px; 
}


.page-link:hover {
  color: black !important;
  background-color: #E6FCF6 !important; 
  text-decoration: none; 
}


.page-item.active .page-link,
.page-link:focus {
  color: white !important; 
  background-color: #44D7B5 !important; 
  outline: none; 
  border-color: #44D7B5 !important; 
}
 
.pagination{
  margin-top: 50px;
  display: flex;
  justify-content: center; 
  align-items: center;
  list-style: none; 
  padding: 0;
}
  
  .spacing{
    margin-bottom: 200px;
  }

  .agent-title{
    color: white;
  }

  .agents{
    padding: 0;
    display: flex;
    justify-content: space-evenly;
  }

  .agent-card{
    padding: 0;
    width: 410px;
    font-size: 12px;
    display: flex;
    background-color: #44D7B5;
    margin: 10px;
    border-radius: 200px;
  }


  .title{
    text-align: center;
    color: #44D7B5;
  }

  .aligning{
    margin-top: 50px;
    display: flex;
    text-align: center;
    justify-content: center;
  }

  .search-agent{
        width: 300px;
        height: 40px;
        border: solid;
        border-width: 1px;
        border-color: rgb(168, 168, 168);
        border-radius: 10px;
        margin-left: 20px;
        margin-right: 20px;
    }


    .agent-control.me-2{
        color: rgb(0, 0, 0);
        border: none;
        font-size: 15px;
        margin-left: 10px;
    }
    .agent-control:focus{
        outline: none;
        box-shadow: none;
    }
</style>