#include<iostream>
#include<string>
using namespace std;
struct student
{
    string id;
    string name;
    double grade;
    bool is_ok = 1;
public:
    void set()
    {
        cin >> id >> name >> grade;
    }
    void print()
    {
        cout << id <<" "<< name <<" "<< grade << endl;
    }
};
int main()
{
    struct student students[100];
    int command,index=0;
    while (cin >> command)
    {
        if (command == 4)break;
        if (command == 1)
        {
  
            students[index++].set();
        }
        if (command == 2)
        {
            string n;
            cin >> n;
            for (int i = index-1; i >=0; i--)
            {
                if (students[i].id == n&&students[i].is_ok == 1)
                {
                    students[i].is_ok = 0;
                    break;
                }
            }
        }
        if (command == 3)
        {
            for (int i = index - 1; i >= 0; i--)
            {
                if (students[i].is_ok == 1) students[i].print();
            }
        }
    }
}