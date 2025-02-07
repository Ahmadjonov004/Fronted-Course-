from utils import process_txt_file, process_docx_file, process_xlsx_file
def write_to_txt(questions, answers, filename:str='paradigma'):
    ans = """"""
    for i in range(len(questions)):
        shablon = f"""
    <p class="ques">{questions[i]}</p>
    <div class="options">
    <span>{answers[i]}</span>
    </div>
    <hr>
    """
        ans+=shablon

    f = open(f'{filename}.txt', 'w')
    f.write(ans)
    print("Success!!!")


def customize_file(file_path:str)->None:
    questions, answers = [], []
    filetype = file_path.split('.')[-1]
    if filetype in ['docx', 'doc']:
        questions, answers = process_docx_file(file_path)
    elif filetype == 'txt':
        questions, answers = process_txt_file(file_path)
    elif filetype == 'xlsx':
        questions, answers = process_xlsx_file(file_path)
    
    write_to_txt(questions, answers, 'paradigma') # file nomini ko'rsating

customize_file('../xx/paradigma2.txt')#file manzilini ko'rsating