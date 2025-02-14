
import ClassComponent from './components/class-component/ClassComponent'
import FunctionComponent from './components/functionComponent/function'
import BubblingExample from './components/ForEvent/exampleEvent'
import PreventDefaultExample from './components/ForEvent/example2'
import Renames from './components/amaliy/useState'
import AgePlus from './components/amaliy/object'
import FruitList from './components/amaliy/array'
import Counter from './components/homeWork/counter'
import BooleanToggle from './components/homeWork/toggle'
import InputMirror from './components/homeWork/InputMirror'
import Shop from './components/homeWork/Shop'
import ChangeColor from './components/homeWork/ChangeColor'
import UsersList from './components/3-dars/1-misol'


function App() {
  return (
    <div>
      <ClassComponent/>
      <FunctionComponent/>
      <BubblingExample/>
      <PreventDefaultExample/>
      <Renames/>
      <AgePlus/>
      <FruitList/>
      <Counter/>
      <BooleanToggle/>
      <InputMirror/>
      <Shop/>
      <ChangeColor/>
      <UsersList/>
      
    </div>

    
  )
}

export default App