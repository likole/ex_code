#include<iostream>
#include<string>
using namespace std;
struct student
{
    string name;
    int a, b, c;
    int sum;
};
int main()
{
    student students[100];
    string str;
    int a, b, c,index=0;
    while (cin >> str >> a >> b >> c)
    {
        students[index].name = str;
        students[index].a = a;
        students[index].b = b;
        students[index].c = c;
        students[index].sum = a + b + c;
        index++;
    }
    for (int i = 0; i < index-1; i++)
    {
        for (int j = 0; j < index-1-i; j++)
        {
            if (students[j].sum < students[j + 1].sum)swap(students[j], students[j + 1]);
        }
    }
    for (int i = 0; i < index; i++)
    {
        cout << students[i].name << " " << students[i].a << " " << students[i].b << " " << students[i].c << endl;
    }
}