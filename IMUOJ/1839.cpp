#include<iostream>
#include<string> 
using namespace std;
class student
{
    string name;
    int deg;
public:
    student();
    string getname() { return name; }
    friend int compare(student &s1, student &s2);
    int getdeg() { return deg; }
};
student::student()
{
    cin >> name >> deg;
}
int compare(student &s1, student &s2)
{
    if (s1.deg > s2.deg)return 1;
    if (s1.deg < s2.deg)return -1;
    return 0;
}
int main()
{
    student st[6];
    int i = 0, min = 0, max = 0;
    for (i = 1; i < 6; i++)
    {
        if (compare(st[max], st[i]) == -1) max = i;
        if (compare(st[min], st[i]) == 1) min = i;
    }
    cout << "最高分:" << st[max].getdeg() << "姓名:" << st[max].getname() << endl;
    cout << "最低分:" << st[min].getdeg() << "姓名:" << st[min].getname() << endl;
}