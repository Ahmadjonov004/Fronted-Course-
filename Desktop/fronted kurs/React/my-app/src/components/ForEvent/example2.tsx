const PreventDefaultExample: React.FC = () => {
    const handleSubmit = (event: React.FormEvent<HTMLFormElement>) => {
      event.preventDefault(); // Formani jo‘natishni oldini olamiz
      console.log("Formani jo‘natish to‘xtatildi!");
    };
  
    return (
      <form onSubmit={handleSubmit}>
        <input type="text" placeholder="Ismingizni kiriting" />
        <button type="submit">Jo‘natish</button>
      </form>
    );
  };
  
  export default PreventDefaultExample;
  