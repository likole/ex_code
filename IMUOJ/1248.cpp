#include<iostream>
#include<string>
using namespace std;
int main()
{
    string str;
    while (1)
    {
        getline(cin, str);
        if (str == "END")break;
        for (int i = 0; i < str.length(); i++)
        {
            switch (str[i])
            {
            case 'A':case 'W':case 'F':
                str[i] = 'I';
                break;
            case 'C':
                str[i] = 'L';
                break;
            case 'M':
                str[i] = 'o';
                break;
            case 'S':
                str[i] = 'v';
                break;
            case 'D':case 'P':case 'G':case 'B':
                str[i] = 'e';
                break;
            case 'L':
                str[i] = 'Y';
                break;
            case 'X':
                str[i] = 'u';
                break;
            default:
                break;
            }
        }
        cout << str << endl;
    }
}