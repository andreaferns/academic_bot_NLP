from datetime import datetime


def sample_responses(input_text):
    user_message = str(input_text).lower()

    if user_message in ("hello", "hi", "hey",):
        wel="""
        Welcome To DataBot! Let us know your Department\n
        """
        return wel

    if user_message in ("computer", "comps", "computer engineering", "computer engg", "comps engg", "CO",):
        wel_comp = "Welcome to Computer Engineering! Let us Know your Semester\n Hint: \n Type co before semester name \n Eg co sem2"
        return wel_comp

    if user_message in ("co second sem", "co semester 2", "co sem2",):
        sem2_comp = """
        The Subjects are as Follows:
        /sem2_maths --> Engineering Mathematics \n
        /eg --> Engineering Drawing
        /chem2 --> Chemistry II
        /phy2 --> Physics II
        """
        return sem2_comp

    if user_message in ("co third sem", "co semester 3", "co sem3", "co sem 3" ,):
        sem3_comp = """
        The Subjects are as Follows:
        /sem3_maths --> Engineering Mathematics \n
        /dlca --> Digital Logic \n
        /ds --> Data Structure \n
        /dsgt --> Discrete Graph Theory \n
        /cg --> Computer Graphics \n
        """
        return sem3_comp

    if user_message in ("co fourth sem", "co semester 4", "co sem4",):
        sem4_comp = """
        The Subjects are as Follows:
        /sem4_maths --> Engineering Mathematics \n
        /mp --> Micro Processor \n
        /opsys--> Operating System \n
        /dbms --> Database Management System \n
        /aoa --> Analysis of Algorithm \n
        """
        return sem4_comp

    if user_message in ("co fifth sem", "co semester 5", "co sem5",):
        sem5_comp = """
        The Subjects are as Follows:
        /tcs --> Theoretical Computer Science \n
        /dwm --> Data Warehousing & Mining \n
        /cn--> Computer Network \n
        /ip --> Internet Programming \n
        /se --> Software Engineering \n 
        """
        return sem5_comp

    if user_message in ("co sixth sem", "co semester 6", "co sem6",):
        sem6_comp = """
        The Subjects are as Follows:
        /spcc --> Theoretical Computer Science \n
        /css--> Data Warehousing & Mining \n
        /ai--> Computer Network \n
        /qa --> Internet Programming \n
        /iot --> Software Engineering \n 
        /mobcomp --> Mobile Computing
        """
        return sem6_comp

    error_message = """
        Sorry, I did not understand your message. Please try again or type /help to see available commands.
        """
    return error_message












